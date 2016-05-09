(function() {
	var app = angular.module('store', [], function($interpolateProvider) {
		$interpolateProvider.startSymbol('<%');
		$interpolateProvider.endSymbol('%>');
	});

	app.controller('StoreController', function() {
		this.products = gems;
	});

	app.controller("PanelController", function() {
		this.tab = 1;

		this.selectTab = function(setTab) {
			this.tab = setTab;
		};

		this.isSelected = function(checkTab) {
			return this.tab === checkTab;
		};
	});

	app.controller('GalleryController', function() {
		this.current = 0;

		this.setCurrent = function(newValue) {
			this.current = newValue;
		};
	});

	app.controller('ReviewController', function() {
		this.review = {};

		this.addReview = function(product) {
			product.reviews.push(this.review);
			this.review = {};
		};
	});

	var gems = [{
			name: 'Dodecahedron',
			price: 2.95,
			description: 'Lorem ipsum dolor sit amet.',
			canPurchase: true,
			shine: 8,
			images: [
				'https://yt3.ggpht.com/-DsMZjXnaByc/AAAAAAAAAAI/AAAAAAAAAAA/uhk-VoxuC2Q/s100-c-k-no/photo.jpg',
				'https://yt3.ggpht.com/-Y7OTMm87DGE/AAAAAAAAAAI/AAAAAAAAAAA/e2DeD8bd37Q/s100-c-k-no/photo.jpg'
			],
			reviews: [{
        stars: 5,
        body: "I love this gem!",
        author: "joe@example.org",
        createdOn: 1397490980837
      }, {
        stars: 1,
        body: "This gem sucks.",
        author: "tim@example.org",
        createdOn: 1397490980837
      }]
	}];

})();