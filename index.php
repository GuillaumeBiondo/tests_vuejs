<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Tests sur vue js</title>
	<!-- Custom fonts for this template-->
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
	<script src="https://unpkg.com/vuex@2.0.0"></script>
	<script src="https://unpkg.com/http-vue-loader"></script>
	<link rel="stylesheet" href="https://unpkg.com/element-ui/lib/theme-chalk/index.css">
	<!-- import du JavaScript -->
	<script src="https://unpkg.com/element-ui/lib/index.js"></script>

	<style>
		.affmasq-enter, .affmasq-leave-to{
			opacity:0;
		}
		.affmasq-enter-active, .affmasq-leave-active{
			transition: opacity 0.5s ease-out;
		}
		.dropdown-large{ padding:20px; }

		@media all and (min-width: 992px) {
			.dropdown-large{ 
				min-width:500px;
				max-height:350px;
				overflow: auto;
			}
		}
	</style>
</head>

	<body>
		<div id="app">
			<div class="row">
				<div class="col-7 bg-primary text-white">
					coucou les gens!<br>
					Ajout d'une modif
				</div>
				<div class="col bg-success text-white">
					Mon premier GIST <br>
					<script src="https://gist.github.com/GuillaumeBiondo/d0b8ba9b93f59a5efecabf0e3f14b480.js"></script>
				</div>
				<div class="clo-12">
				ljksldfkj ljf mlqskj
				</div>
			</div>
		</div>
	</body>
	<script>
		//définition des composants locaux
	
		//instanciation de vue sur le composant global
		var vm=new Vue({
			el: '#app',
			data: {
				data: [
					{ first_name: "Antonio",
						last_name: "Okoro",
						email: "cheezytony1@gmail.com",
						date_of_birth: "1998-05-15"
					},
					{
						first_name: "Naruto",
						last_name: "Uzumaki",
						email: "narutouzumaki@gmail.com",
						date_of_birth: "1987-10-10"
					},
					{
						first_name: "Sasuke",
						last_name: "Uchiha",
						email: "sasukeuchiha@gmail.com",
						date_of_birth: "1987-07-23"
					},
					{
						first_name: "Rock",
						last_name: "Lee",
						email: "rocklee@gmail.com",
						date_of_birth: "1985-11-27"
					},
					{
						first_name: "Neji",
						last_name: "Hyuga",
						email: "nejihyuga@gmail.com",
						date_of_birth: "1985-09-22"
					},
					{
						first_name: "Shikamaru",
						last_name: "Nara",
						email: "shikamarunara@gmail.com",
						date_of_birth: "1987-09-22"
					}
				],
			
				// Columns that should be displayed on The Table
				columns: [
					{name: "first_name", th: "First Name"},
					{name: "last_name", th: "Last Name"},
					{name: "email", th: "Email Address"},
					{name: "phone", th: "Phone Number"},
					{name: "date_of_birth", th: "Date Of Birth", show: false},
					{name: "age", th: "Age", render (row, cell, index) {
						// Parse date and display difference
						return moment(row.date_of_birth).fromNow();
					}},
				],
				actions: [
					{text: "Delete", color: "danger", action: (row, index) => {
						alert('about to delete ${row.first_name} ${row.last_name}');
					}}
				]
			},
			components:{
			},
			
		})
	</script>
</html>
