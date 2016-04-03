			
<div class="row">
	<div class="col-sm-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Izaberite tabelu</h3>
			</div>
			<div class="panel-body table-responsive">
				<ul class="nav nav-tabs">
					<li role="presentation">
						<a href="" class="pure" role="tab" data-toggle="tab">
							Uloge
						</a>
					</li>
					<li role="presentation">
						<a href="" onclick="vrati_podatke('o_autoru', '');" role="tab" data-toggle="tab">
							O autoru
						</a>
					</li>
					<li role="presentation">
						<a href="" onclick="vrati_podatke('proizvodi', '');" role="tab" data-toggle="tab">
							Proizvodi
						</a>
					</li>
					<li>
						<a href="" onclick="vrati_podatke('brand', '');" role="tab" data-toggle="tab">
							Brend
						</a>
					</li>
					<li role="presentation">
						<a href="" onclick="vrati_podatke('korisnici', '');" role="tab" data-toggle="tab">
							Korisnici
						</a>
					</li>
					<li role="presentation">
						<a href="" onclick="vrati_podatke('meni', '');" role="tab" data-toggle="tab">
							Meni
						</a>
					</li>
					<li role="presentation">
						<a href="" onclick="vrati_podatke('kategorije', '');" role="tab" data-toggle="tab">
							Kategorije
						</a>
					</li>
					<li role="presentation">
						<a href="" onclick="vrati_podatke('ankete', '');" role="tab" data-toggle="tab">
							Ankete
						</a>
					</li>
					<li role="presentation">
						<a href="" onclick="vrati_podatke('odgovori', '');" role="tab" data-toggle="tab">
							Odgovori
						</a>
					</li>
				</ul>
				<div id="tabela" class="tab-content"></div>
				<script id="template" type="text/x-handlebars-template">
					<table id="uloge" class="table table-striped table-hover">
						<thead>
							<tr>
								<th>Naziv</th>
								<th>Uneo</th>
								<th>Dana</th>
								<th title="Izmena"><i class="fa fa-pencil fa-lg"></i></th>
								<th title="Brisanje"><i class="fa fa-trash-o fa-lg"></i></th>
							</tr>
						</thead>
						<tbody>
							{{#each .}}
							<tr>
								<td>{{naziv}}</td>
								<td>{{izmenio}}</td>
								<td>{{vreme_izmene}}</td>
								<td><button id="{{id}}" onclick="vrati_podatke('uloge', this.id);" class="btn btn-xs btn-link">
										<i class="fa fa-pencil fa-lg"></i>
									</button>
								</td>
								<td><button id="{{id}}" class="btn btn-xs btn-link">
										<i class="fa fa-trash-o fa-lg"></i>
									</button>
								</td>
							</tr>
							{{/each}}
						</tbody>
					</table>
				</script>
			</div>
		</div>
	</div>
</div>
