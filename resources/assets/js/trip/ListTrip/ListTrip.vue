<template>
	<div>
		<DolanHeader />
		<Jumbotron />
		<div class="container">
			<div class="row">
				<Sidebar/>
				<CardList/>
			</div>
		</div>
		<DolanFooter/>
	</div>
</template>

<script>
	import Sidebar from './partial/Sidebar'
	import DolanHeader from '../../global/Header'
	import Jumbotron from '../../global/Jumbotron'
	import DolanFooter from '../../global/Footer'
	import CardList from './partial/CardList'

	export default{
		components: {
			Sidebar,
			DolanHeader,
			Jumbotron,
			DolanFooter,
			CardList
		}
	}
</script>