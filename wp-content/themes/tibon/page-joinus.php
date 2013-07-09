<?php 
/*
Template Name: joinus
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
		<div class="contentE">
			<h2>德力邦用人之道</h2>
			<p>融合中国传统价值观与现代青年的特点，德力邦提出三个人才基准点 ： </p>
			<p>“健康快乐文化”——强调中国传统文化中的诚信、正直、开放、 包容、利他、守
诺；提倡健康工作,快乐生活的工作理念。</p>
			<p>“学习成长文化”——强调自我实现的愿望、决心、主动性、不断学习与能力增长 。 </p>
			<p>“结果兑现文化”——强调用执行力和结果来兑现工作承诺并完成自我价值实现 。</p>
		</div>
		<table class="work">
			<thead>
				<tr>
					<th class="f">职务名称</th>
					<th>职务描述</th>
					<th class="l">发布日期</th>
				</tr>
			</thead>
				<tr>
					<td class="f">客服高级经理</td>
					<td>我们有着市场领先的薪酬策略，成熟完善福利与奖励制度。我们提供丰厚的住房公积金、商业补充医疗保险、年度体检和洗牙，细节点滴，为您想到，排除您生活后顾之忧！我们组织多种健身及竞赛项目、郊游、滑雪、植树等各种活动，丰富大家的业余生活。我们的基金会还进行多项服务，员工们自愿参与，回馈社会。</td>
					<td class="l">2013-07-03</td>
				</tr>
				<tr class="trbg">
					<td class="f">营销高级经理</td>
					<td>我们有着市场领先的薪酬策略，成熟完善福利与奖励制度。我们提供丰厚的住房公积金、商业补充医疗保险、年度体检和洗牙，细节点滴，为您想到，排除您生活后顾之忧！我们组织多种健身及竞赛项目、郊游、滑雪、植树等各种活动，丰富大家的业余生活。我们的基金会还进行多项服务，员工们自愿参与，回馈社会。</td>
					<td class="l">2013-07-03</td>
				</tr>
				<tr>
					<td class="f">责任建筑师</td>
					<td>我们有着市场领先的薪酬策略，成熟完善福利与奖励制度。我们提供丰厚的住房公积金、商业补充医疗保险、年度体检和洗牙，细节点滴，为您想到，排除您生活后顾之忧！我们组织多种健身及竞赛项目、郊游、滑雪、植树等各种活动，丰富大家的业余生活。我们的基金会还进行多项服务，员工们自愿参与，回馈社会。</td>
					<td class="l">2013-07-03</td>
				</tr>
			<tbody>
				
			</tbody>
		</table>
	</div>
	<div class="clearfix"></div>
</div>

<?php get_footer(); ?>
