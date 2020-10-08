				</div>		<!-- /.row -->
			<hr>
		</div>		<!-- /.container -->
		
		<!-- Footer -->
		<footer class="navbar-fixed-bottom navbar-inverse">
		<p>Copyright &copy; Your Website <span id="root"></span></p>
		</footer>
		
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script>
    		let container = document.querySelector("#root");
   			let date = new Date();
    
    		container.innerText = date.getFullYear();
		</script>


	</body>
</html>
