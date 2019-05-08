<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Book;

class BookControllerTest extends TestCase
{
    public function testBookIndex()
    {
        $response = $this->get('/books');

        $response->assertStatus(200);
    }

    public function testRedirect()
    {
        $response = $this->get('/');
        $response->assertRedirect('/books');
    }

    public function testBookStore()
    {
        $book = factory(Book::class)->make();
        $response = $this->post(route('books.store'), $book->toArray());
        $response->assertStatus(302); //redirect to /books after completion
        $response->assertSessionHas('status', 'Book added!');
    }

    public function testBookDestroy()
    {
        $book = factory(Book::class)->create();
        $response = $this->delete(route('books.destroy', $book->id));
        $response->assertStatus(302); //redirect to /books after completion
        $response->assertSessionHas('status', 'Book deleted!');
        $book = $book->fresh();
        $this->assertNotNull($book->deleted_at);
    }

    public function testBookShow()
    {
        $book = Book::first();
        $response = $this->get(route('books.show', ['id' => $book->id]));
        $response->assertStatus(200);
    }

    public function testBookCreate()
    {
        $response = $this->get(route('books.create'));
        $response->assertStatus(200);
    }
}
