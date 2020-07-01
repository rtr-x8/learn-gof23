package rtrx8.learngof23.iterator;

/**
 * Aggregate
 * Iteratorを作り出すインターフェース
 * 「自分が持っている要素を順番にスキャンする人」を作り出す
 */
public interface Aggregate {
    public Iterator iterator();
}
