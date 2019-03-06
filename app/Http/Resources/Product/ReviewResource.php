class ReviewResource extends ReviewResource{

    @param 
    @return

public function toArray($request){

        return[
        'custommer' => $this -> customer,
        'body' => $this -> review,
        'star' => $this ->star]
}
}