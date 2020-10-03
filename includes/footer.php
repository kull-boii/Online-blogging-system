       <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website <span id="root"></span></p>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

<script>
    let container = document.querySelector("#root");

    let date = new Date();
    
    container.innerText = date.getFullYear();

</script>

</html>
