<?php 


it('return 200 response', function(){
    $response = $this->get('/');
    $response->assertStatus(200);
});
