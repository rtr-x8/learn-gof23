package rtrx8.learngof23.iterator;

public class MainIterator {
    public static void main(String[] args) {
        BookShelf bookShelf = new BookShelf(4);
        bookShelf.appendBook(new Book("賢者の石"));
        bookShelf.appendBook(new Book("秘密の部屋"));
        bookShelf.appendBook(new Book("アズカバンの囚人"));
        bookShelf.appendBook(new Book("不死鳥の騎士団"));
        Iterator it = new BookShelfIterator(bookShelf);
        while (it.hasNext()) {
            Book book = (Book) it.next();
            System.out.println(book.getName());
        }
    }
}
