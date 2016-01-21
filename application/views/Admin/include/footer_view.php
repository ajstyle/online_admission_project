    
   <footer>
 <div class = "container">
    <div class = "navbar-text pull-left">
    <p></p>
    </div>
    </div>
    </div>
    
</footer>

 <footer class="footer">
     
 <h4><center><div id = "footer_text"><?=date('Y')?></p></center></h4>
         </div>
    </footer>
 <script src="<?=base_url()?>public/js/tab.js" ></script>
<script>
function update()
{
var message = document.getElementById('footer_text') ; 
message.innerHTML = "MohanLal Sukhadia University &COPY; " + Date() ; 
}
timer =setInterval(update , 500 ) ; 


</script>

<style>
.navbar-inverse
{
	height : 50%;
    width : 100%;
}
</style>
</body>
</html>