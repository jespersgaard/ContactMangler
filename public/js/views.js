// App.Views.App({ collection: App.contacts });

// Global App View
App.Views.App = Backbone.View.extend({
	initialize: function() {
		console.log( this.collection.toJSON() );
	}
});