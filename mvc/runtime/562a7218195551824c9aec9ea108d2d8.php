<?php echo include LAYOUTS.'main.php';?>

	<div class="container-fluid margin100 minheight">		
		<?php foreach((array)$data as $k=>$v){ ?>
		<div class="panel panel-default">
		  <div class="panel-heading"><?php echo $v['face'];?>发表于<?php echo date('Y-m-d H:i:s',$v['addtime']);?></div>
		  <div class="panel-body">
		   		<?php echo $v['code'];?>
		  </div>	
		</div>
		<?php } ?>
		<div id="page"><?php echo $pagestr;?></div>
	</div>
	

	<!-- 尾部 -->
	<footer>
		<div class="container ">
			<p class="center">php1505c微信开发小组</p>
		</div>
	</footer>

	<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo JSPATH;?>bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo JSPATH;?>backend.js"></script>
</body>
</html>