// Ionic Starter App

// angular.module is a global place for creating, registering and retrieving Angular modules
// 'starter' is the name of this angular module example (also set in a <body> attribute in index.html)
// the 2nd parameter is an array of 'requires'
// 'starter.controllers' is found in controllers.js
angular.module('starter', ['ionic', 'starter.controllers'])

.run(function($ionicPlatform) {
  	$ionicPlatform.ready(function() {
		// Hide the accessory bar by default (remove this to show the accessory bar above the keyboard
		// for form inputs)
		if (window.cordova && window.cordova.plugins.Keyboard) {
		  	cordova.plugins.Keyboard.hideKeyboardAccessoryBar(true);
		}
		if (window.StatusBar) {
		  	// org.apache.cordova.statusbar required
		  	StatusBar.styleDefault();
		}
  	});
})

.config(function($stateProvider, $urlRouterProvider, $ionicConfigProvider) {
	$ionicConfigProvider.navBar.alignTitle('center');
  	$stateProvider

  	.state('app', {
		url: "/app",
		abstract: true,
		templateUrl: "templates/menu.html",
		controller: 'AppCtrl'
  	})

  	.state('app.home-base', {
		url: "/home-base",
		views: {
			'menuContent': {
				templateUrl: "templates/home-base.html",
				controller: 'HomeBaseCtrl'
	  		}
		}
 	})
  	.state('app.activity-feed', {
		url: "/activity-feed",
		views: {
			'menuContent': {
				templateUrl: "templates/activity-feed.html",
				controller: 'ActivityFeedCtrl'
	  		}
		}
 	})
      	.state('app.agent-assets', {
		url: "/agent-assets",
		views: {
			'menuContent': {
				templateUrl: "templates/agent-assets.html",
				controller: 'AgentAssetsCtrl'
	  		}
		}
 	})
      	.state('app.furnish-farm', {
		url: "/furnish-farm",
		views: {
			'menuContent': {
				templateUrl: "templates/furnish-farm.html",
				controller: 'FurnishFarmCtrl'
	  		}
		}
 	})    

      	.state('app.garage-sale', {
		url: "/garage-sale",
		views: {
			'menuContent': {
				templateUrl: "templates/garage-sale.html",
				controller: 'GarageSaleCtrl'
	  		}
		}
 	})        
    
      	.state('app.recruitment', {
		url: "/recruitment",
		views: {
			'menuContent': {
				templateUrl: "templates/recruitment.html",
				controller: 'RecruitmentCtrl'
	  		}
		}
 	})    
    
      	.state('app.secure-line', {
		url: "/secure-line",
		views: {
			'menuContent': {
				templateUrl: "templates/secure-line.html",
				controller: 'SecureLineCtrl'
	  		}
		}
 	})      
    
    
      	.state('app.sir-austin-u', {
		url: "/sir-austin-u",
		views: {
			'menuContent': {
				templateUrl: "templates/sir-austin-u.html",
				controller: 'SirAustinUCtrl'
	  		}
		}
 	})          
    
  	.state('app.profile', {
		url: "/profile",
		views: {
	  		'menuContent': {
				templateUrl: "templates/profile.html"
	  		}
		}
  	})
	.state('app.followers', {
		url: "/followers",
	  	views: {
			'menuContent': {
		 		templateUrl: "templates/followers.html"
			}
	  	}
	})
	.state('app.listUsers', {
		url: "/listUsers",
	  	views: {
			'menuContent': {
		 		templateUrl: "templates/listUsers.html"
			}
	  	}
	})
	.state('app.settings', {
		url: "/settings",
	  	views: {
			'menuContent': {
		 		templateUrl: "templates/settings.html"
			}
	  	}
	})    ;

  	// if none of the above states are matched, use this as the fallback
  	$urlRouterProvider.otherwise('/app/listUsers');

});
