<script type="text/javascript">
			var t1=0;
			window.onscroll = scroll1;

			function scroll1()
			{
			    var gotoTop = document.getElementById('gotoTop');
			    window.scrollY>0 ? gotoTop.style.display='Block' :  gotoTop.style.display='none';
			}
			function abcd()
			{
			    var y1 = window.scrollY;
			    y1 = y1-500;
			    window.scrollTo(0,y1);
			    if(y1>0)
			    {
			        t1 = setTimeout("abcd()",60);  
			    }
			    else
			    {
			        clearTimeout(t1);   
			    }
			}
		</script>
		<style type="text/css">
		#gotoTop {		   
		    border-radius: 4px;
		    background: #818c90;
		    position: fixed;
		    bottom: 58px;
		    right: 32px;
		    display: none;
		    opacity: 0.89;
		    filter: alpha(opacity=89);
		    z-index: 499841;
		    width:30px;
		    height:35px;
		    text-align:center;
		    
		}
		#gotoTop {
		    transition: all 0.5s ease 0s;
		    -moz-transition: all 0.5s ease 0s;
		    -webkit-transition: all 0.5s ease 0s;
		    -o-transition: all 0.5s ease 0s;
		    opacity: 0.5;
		    display:none;
		    cursor: pointer;
		}
		#gotoTop:hover {
		    opacity: 1;
		    background-color:#ecef33;
		}
		
		</style>

		<i id="gotoTop" title="Go to top" onclick="abcd()"><i class="ti-angle-up" style="color:#ffffff;position: absolute;	margin: 10px 0px 0px -7px;"></i> </i>
