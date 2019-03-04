class ProductCollection extends Resource{
    public function toArray($request)
    {
        return [
        'name' => $this->name,
        'totalPrice' => 'totalPrice' => round ((1-($this->discount/100)) * $this->price,2),
        'rating' => $this -> reviews->count () > 0 ? round($this->reviews->sum('star')/$this->reviews->count
        (),2) : 'No rating yet',
        'discount' => $this ->discount,
        'href' => [
            'link' => route ('product.show', $this->id)
         ]
        ];
        
    }
}