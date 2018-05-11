<?php
namespace App\Helpers\Contracts;

Interface HelperContract
{
        public function sendEmail($to,$subject,$data,$view,$type);
        public function createUser($data);
        public function createUserData($data);
        public function createProduct($data);
        public function createProductData($data);
        public function getProducts();
        public function getProduct($id);
		public function addToCart($data);
		public function removeFromCart($data);
		public function searchUsers($term);
		public function searchUserData($term);
		public function searchProductData($term);
		public function searchProducts($term);
		public function search($term);
		public function getSlideBanner();
		public function getLaneBanner();
		public function paginate($items, $perPage);
        /*public function checkout();*/
}
 ?>