<div class="book-container">
    <a href="book/create" class="new-book-btn">New Book</a>
    <div>
        <ul>
            @foreach($books as $book)
                <li>
                    <p>{{ $book->title }}</p>
                    <p>{{ $book->release_date }}</p>
                </li>
                <div class="book-buttons">
                    <a href="{{ route('book.show', $book) }}" class="book-show-button">Show</a>
                    <a href="book/edit" $book class="book-edit-button">Edit</a>
                    <button class="book-delete-button">Delete</button>
                </div>
            @endforeach
        </ul>
    </div>
</div>