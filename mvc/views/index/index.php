{include LAYOUTS.'main.php'}

	<div class="container-fluid margin100 minheight">		
		{foreach $data}
		<div class="panel panel-default">
		  <div class="panel-heading">{$v['face']}发表于{date('Y-m-d H:i:s',$v['addtime'])}</div>
		  <div class="panel-body">
		   		{$v['code']}
		  </div>	
		</div>
		{/foreach}
		<div id="page">{$pagestr}</div>
	</div>
	
	<!-- 尾部 -->
	<footer>
		<div class="container ">
			<p class="center">微信开发小组</p>
		</div>
	</footer>

	<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{JSPATH}bootstrap.min.js"></script>
	<script type="text/javascript" src="{JSPATH}backend.js"></script>
</body>
</html>