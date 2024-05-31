<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use DOMDocument;

class BookController extends Controller
{
    public function addBook(Request $request)
    {
        $xmlContent = $request->input('xml');
        $xsdPath = storage_path('schemas/book-schema.xsd');

        $dom = new DOMDocument;
        $dom->loadXML($xmlContent);

        if ($dom->schemaValidate($xsdPath)) {
            $bookData = simplexml_load_string($xmlContent);

            $book = new Book;
            $book->title = $bookData->title;
            $book->author = $bookData->author;
            $book->isbn = $bookData->isbn;
            $book->publication_year = $bookData->publicationYear;
            $book->publisher = $bookData->publisher;
            $book->save();

            return response()->json(['message' => 'Book added successfully.'], 200);
        } else {
            return response()->json(['message' => 'Invalid XML.'], 400);
        }
    }

    public function getBookByISBN($isbn)
    {
        $book = Book::where('isbn', $isbn)->first();

        if ($book) {
            $xml = new DOMDocument('1.0', 'UTF-8');
            $root = $xml->createElement('book');

            $title = $xml->createElement('title', $book->title);
            $root->appendChild($title);

            $author = $xml->createElement('author', $book->author);
            $root->appendChild($author);

            $isbn = $xml->createElement('isbn', $book->isbn);
            $root->appendChild($isbn);

            $publicationYear = $xml->createElement('publicationYear', $book->publication_year);
            $root->appendChild($publicationYear);

            $publisher = $xml->createElement('publisher', $book->publisher);
            $root->appendChild($publisher);

            $xml->appendChild($root);
            return response($xml->saveXML(), 200)->header('Content-Type', 'application/xml');
        } else {
            return response()->json(['message' => 'Book not found.'], 404);
        }
    }
}
