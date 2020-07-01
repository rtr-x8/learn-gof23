package rtrx8.learngof23.iterator;

/**
 * 要素を順番にスキャンしていく
 */
public interface Iterator {
    /**
     * 次の要素が存在するか確認する
     *
     * @return
     */
    public boolean hasNext();

    /**
     * 内部状態を先に進める
     * 次の要素を返す
     *
     * @return
     */
    public Object next();
}
