<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
      // echo I('get.n');
      echo '{
"employees": [
{ "title":"Bill" , "desc":"Gates" },
{ "title":"George" , "desc":"Bush" },
{ "title":"Thomas" , "desc":"Carter" },
{ "title":"Thomas" , "desc":"Carter" },
{ "title":"Thomas" , "desc":"Carter" },
{ "title":"Thomas" , "desc":"Carter" }
]
}';
    }
}
