<?php 
/*
Template Name: jingshen
*/

get_header();
?>
<div class="top-banner">
</div>

<div class="breadcrumbs">
	<div class="container">
	<?php if(function_exists('bcn_display')) {
	    bcn_display();
	}
	?>
	</div>
</div>
<div class="container">
	<?php
	include (TEMPLATEPATH . '/sidebar.php');
	?>
	<div class="side-content">
		<div class="zongzhi">
			<div class="left-bg">
				
			</div>
			<div class="zongzhi-content">
				<span class="mr30">德 力 邦 • 宗 旨</span>一 切 只 为 打 赢 ！
			</div>
		</div>
		<div class="contentC">
			<p>德力邦•愿景</p>
			<p>成为宁夏地区一流的房地产智力服务企业</p>
			<p>德力邦•使命</p>
			<p>为客户提供持续满意的房地产智力服务，为员工提供持续发展的平台</p>
			<p>德力邦•追求</p>
		</div>
		<div class="contentD">
			<div class="item">
				<h3>追求领先</h3>
				<p>我们追求市场份额领先。同时，在专业风范、服务信誉、管理技术上坚持
最高标准。</p>
			</div>
			<div class="item">
				<h3>追求稳定</h3>
				<p>追求长期稳健发展是企业社会责任感的体现，我们将遵循企业可持续发展的原则，在不违背德力邦企业核心价值观的前提下，合理设定各阶段的利
润目标和市场份额指标。</p>
			</div>
			<div class="item">
				<h3>追求知识</h3>
				<p>在知识快速更新的时代，学习与共享知识是进步的唯一途径，我们倡导自我驱动的学习和共享精神。</p>
			</div>
			<div class="item">
				<h3>追求合理</h3>
				<p>效率优先、兼顾公平、可持续发展、是价值分配的基本原则，我们在价值分配上优先考虑对企业发展有贡献的行为，同时重视个人品德、能力、责任和工作态度，追求分配的合理性。</p>
			</div>
			<div class="item">
				<h3>追求专业</h3>
				<p>专业进取是房地产智力服务企业发展的生命线，我们致力于房地产实践经验与市场理论的高度结合，以卓越的专业实践领先同行。</p>
			</div>
		</div>

	</div>
	<div class="clearfix"></div>
</div>

<?php get_footer(); ?>
