<?php
    /**逻辑数据层Module*/
    namespace app;
    class QueryPhone{
        public static function query($phone){
            var_dump($phone);
        }
        /**现在QueryPhone里面申明，再在api处调用*/
        public static function test(){
            var_dump('imooc');
        }
    }
?>