class NewsController extends AppController {

    public function latest() {
        $this->_findNewArticles();
    }

    protected function _findNewArticles() {
        // Logic to find latest news articles
    }
}
