<!doctype html>

<html>

<head>
	<title>Contact Mangler</title>
</head>

<body>

<h1>My Contact Mangler</h1>

<script src="http://code.jquery.com/jquery.js"></script>
<script src="http://underscorejs.org/underscore.js"></script>
<script src="http://backbonejs.org/backbone.js"></script>

<script src="js/main.js"></script>	
<script src="js/models.js"></script>	
<script src="js/collections.js"></script>	
<script src="js/views.js"></script>	
<script src="js/router.js"></script>

<script>

	// create the new router
	new App.Router;
	// Start the history
	Backbone.history.start();

	// manual way using ajax
	App.contacts = new App.Collections.Contacts;
	// fetch the contacts
	// always query your root element...very important
	App.contacts.fetch().then(function(){
		new App.Views.App({ collection: App.contacts });
	});

</script>	

</body>

</html>