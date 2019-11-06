<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="global_assets/css/icons/icomoon/styles.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/layout.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/components.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/colors.min.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="global_assets/js/main/jquery.min.js"></script>
	<script src="global_assets/js/main/bootstrap.bundle.min.js"></script>
	<script src="global_assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="global_assets/js/plugins/forms/inputs/typeahead/handlebars.min.js"></script>
	<script src="global_assets/js/plugins/forms/inputs/alpaca/alpaca.min.js"></script>
	<script src="global_assets/js/plugins/forms/inputs/alpaca/price_format.min.js"></script>
	<script src="global_assets/js/plugins/forms/selects/select2.min.js"></script>
	<script src="global_assets/js/plugins/ui/prism.min.js"></script>
	<script src="global_assets/js/plugins/editors/ckeditor/ckeditor.js"></script>
	<script src="global_assets/js/plugins/forms/styling/uniform.min.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="global_assets/js/demo_pages/alpaca_advanced.js"></script>
	<!-- /theme JS files -->

</head>

<body>

	<!-- Main navbar -->
	<div class="navbar navbar-expand-md navbar-dark">
		<div class="navbar-brand">
			<a href="index.html" class="d-inline-block">
				<img src="global_assets/images/logo_light.png" alt="">
			</a>
		</div>

		<div class="d-md-none">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
				<i class="icon-tree5"></i>
			</button>
			<button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
				<i class="icon-paragraph-justify3"></i>
			</button>
		</div>

		<div class="collapse navbar-collapse" id="navbar-mobile">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
						<i class="icon-paragraph-justify3"></i>
					</a>
				</li>

				<li class="nav-item dropdown">
					<a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
						<i class="icon-git-compare"></i>
						<span class="d-md-none ml-2">Git updates</span>
						<span class="badge badge-pill bg-warning-400 ml-auto ml-md-0">9</span>
					</a>

					<div class="dropdown-menu dropdown-content wmin-md-350">
						<div class="dropdown-content-header">
							<span class="font-weight-semibold">Git updates</span>
							<a href="#" class="text-default"><i class="icon-sync"></i></a>
						</div>

						<div class="dropdown-content-body dropdown-scrollable">
							<ul class="media-list">
								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn bg-transparent border-primary text-primary rounded-round border-2 btn-icon"><i class="icon-git-pull-request"></i></a>
									</div>

									<div class="media-body">
										Drop the IE <a href="#">specific hacks</a> for temporal inputs
										<div class="text-muted font-size-sm">4 minutes ago</div>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn bg-transparent border-warning text-warning rounded-round border-2 btn-icon"><i class="icon-git-commit"></i></a>
									</div>
									
									<div class="media-body">
										Add full font overrides for popovers and tooltips
										<div class="text-muted font-size-sm">36 minutes ago</div>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn bg-transparent border-info text-info rounded-round border-2 btn-icon"><i class="icon-git-branch"></i></a>
									</div>
									
									<div class="media-body">
										<a href="#">Chris Arney</a> created a new <span class="font-weight-semibold">Design</span> branch
										<div class="text-muted font-size-sm">2 hours ago</div>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn bg-transparent border-success text-success rounded-round border-2 btn-icon"><i class="icon-git-merge"></i></a>
									</div>
									
									<div class="media-body">
										<a href="#">Eugene Kopyov</a> merged <span class="font-weight-semibold">Master</span> and <span class="font-weight-semibold">Dev</span> branches
										<div class="text-muted font-size-sm">Dec 18, 18:36</div>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn bg-transparent border-primary text-primary rounded-round border-2 btn-icon"><i class="icon-git-pull-request"></i></a>
									</div>
									
									<div class="media-body">
										Have Carousel ignore keyboard events
										<div class="text-muted font-size-sm">Dec 12, 05:46</div>
									</div>
								</li>
							</ul>
						</div>

						<div class="dropdown-content-footer bg-light">
							<a href="#" class="text-grey mr-auto">All updates</a>
							<div>
								<a href="#" class="text-grey" data-popup="tooltip" title="Mark all as read"><i class="icon-radio-unchecked"></i></a>
								<a href="#" class="text-grey ml-2" data-popup="tooltip" title="Bug tracker"><i class="icon-bug2"></i></a>
							</div>
						</div>
					</div>
				</li>
			</ul>

			<span class="badge bg-success ml-md-3 mr-md-auto">Online</span>

			<ul class="navbar-nav">
				<li class="nav-item dropdown">
					<a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
						<i class="icon-people"></i>
						<span class="d-md-none ml-2">Users</span>
					</a>
					
					<div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-300">
						<div class="dropdown-content-header">
							<span class="font-weight-semibold">Users online</span>
							<a href="#" class="text-default"><i class="icon-search4 font-size-base"></i></a>
						</div>

						<div class="dropdown-content-body dropdown-scrollable">
							<ul class="media-list">
								<li class="media">
									<div class="mr-3">
										<img src="global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Jordana Ansley</a>
										<span class="d-block text-muted font-size-sm">Lead web developer</span>
									</div>
									<div class="ml-3 align-self-center"><span class="badge badge-mark border-success"></span></div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Will Brason</a>
										<span class="d-block text-muted font-size-sm">Marketing manager</span>
									</div>
									<div class="ml-3 align-self-center"><span class="badge badge-mark border-danger"></span></div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Hanna Walden</a>
										<span class="d-block text-muted font-size-sm">Project manager</span>
									</div>
									<div class="ml-3 align-self-center"><span class="badge badge-mark border-success"></span></div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Dori Laperriere</a>
										<span class="d-block text-muted font-size-sm">Business developer</span>
									</div>
									<div class="ml-3 align-self-center"><span class="badge badge-mark border-warning-300"></span></div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Vanessa Aurelius</a>
										<span class="d-block text-muted font-size-sm">UX expert</span>
									</div>
									<div class="ml-3 align-self-center"><span class="badge badge-mark border-grey-400"></span></div>
								</li>
							</ul>
						</div>

						<div class="dropdown-content-footer bg-light">
							<a href="#" class="text-grey mr-auto">All users</a>
							<a href="#" class="text-grey"><i class="icon-gear"></i></a>
						</div>
					</div>
				</li>

				<li class="nav-item dropdown">
					<a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
						<i class="icon-bubbles4"></i>
						<span class="d-md-none ml-2">Messages</span>
						<span class="badge badge-pill bg-warning-400 ml-auto ml-md-0">2</span>
					</a>
					
					<div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-350">
						<div class="dropdown-content-header">
							<span class="font-weight-semibold">Messages</span>
							<a href="#" class="text-default"><i class="icon-compose"></i></a>
						</div>

						<div class="dropdown-content-body dropdown-scrollable">
							<ul class="media-list">
								<li class="media">
									<div class="mr-3 position-relative">
										<img src="global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>

									<div class="media-body">
										<div class="media-title">
											<a href="#">
												<span class="font-weight-semibold">James Alexander</span>
												<span class="text-muted float-right font-size-sm">04:58</span>
											</a>
										</div>

										<span class="text-muted">who knows, maybe that would be the best thing for me...</span>
									</div>
								</li>

								<li class="media">
									<div class="mr-3 position-relative">
										<img src="global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>

									<div class="media-body">
										<div class="media-title">
											<a href="#">
												<span class="font-weight-semibold">Margo Baker</span>
												<span class="text-muted float-right font-size-sm">12:16</span>
											</a>
										</div>

										<span class="text-muted">That was something he was unable to do because...</span>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<div class="media-title">
											<a href="#">
												<span class="font-weight-semibold">Jeremy Victorino</span>
												<span class="text-muted float-right font-size-sm">22:48</span>
											</a>
										</div>

										<span class="text-muted">But that would be extremely strained and suspicious...</span>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<div class="media-title">
											<a href="#">
												<span class="font-weight-semibold">Beatrix Diaz</span>
												<span class="text-muted float-right font-size-sm">Tue</span>
											</a>
										</div>

										<span class="text-muted">What a strenuous career it is that I've chosen...</span>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<div class="media-title">
											<a href="#">
												<span class="font-weight-semibold">Richard Vango</span>
												<span class="text-muted float-right font-size-sm">Mon</span>
											</a>
										</div>
										
										<span class="text-muted">Other travelling salesmen live a life of luxury...</span>
									</div>
								</li>
							</ul>
						</div>

						<div class="dropdown-content-footer justify-content-center p-0">
							<a href="#" class="bg-light text-grey w-100 py-2" data-popup="tooltip" title="Load more"><i class="icon-menu7 d-block top-0"></i></a>
						</div>
					</div>
				</li>

				<li class="nav-item dropdown dropdown-user">
					<a href="#" class="navbar-nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown">
						<img src="global_assets/images/placeholders/placeholder.jpg" class="rounded-circle mr-2" height="34" alt="">
						<span>Victoria</span>
					</a>

					<div class="dropdown-menu dropdown-menu-right">
						<a href="#" class="dropdown-item"><i class="icon-user-plus"></i> My profile</a>
						<a href="#" class="dropdown-item"><i class="icon-coins"></i> My balance</a>
						<a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Messages <span class="badge badge-pill bg-blue ml-auto">58</span></a>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item"><i class="icon-cog5"></i> Account settings</a>
						<a href="#" class="dropdown-item"><i class="icon-switch2"></i> Logout</a>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<!-- /main navbar -->


	<!-- Page content -->
	<div class="page-content">

		<!-- Main sidebar -->
		<div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">

			<!-- Sidebar mobile toggler -->
			<div class="sidebar-mobile-toggler text-center">
				<a href="#" class="sidebar-mobile-main-toggle">
					<i class="icon-arrow-left8"></i>
				</a>
				Navigation
				<a href="#" class="sidebar-mobile-expand">
					<i class="icon-screen-full"></i>
					<i class="icon-screen-normal"></i>
				</a>
			</div>
			<!-- /sidebar mobile toggler -->


			<!-- Sidebar content -->
			<div class="sidebar-content">

				<!-- User menu -->
				<div class="sidebar-user">
					<div class="card-body">
						<div class="media">
							<div class="mr-3">
								<a href="#"><img src="global_assets/images/placeholders/placeholder.jpg" width="38" height="38" class="rounded-circle" alt=""></a>
							</div>

							<div class="media-body">
								<div class="media-title font-weight-semibold">Ezer Banda</div>
								<div class="font-size-xs opacity-50">
									<i class="icon-pin font-size-sm"></i> &nbsp;Cd. Victoria, Tamps
								</div>
							</div>

							<div class="ml-3 align-self-center">
								<a href="#" class="text-white"><i class="icon-cog3"></i></a>
							</div>
						</div>
					</div>
				</div>
				<!-- /user menu -->


				<!-- Main navigation -->
				<div class="card card-sidebar-mobile">
					<ul class="nav nav-sidebar" data-nav-type="accordion">

						<!-- Main -->
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Main</div> <i class="icon-menu" title="Main"></i></li>
						<li class="nav-item">
							<a href="index.php" class="nav-link">
								<i class="icon-home4"></i>
								<span>
									Dashboard
									<span class="d-block font-weight-normal opacity-50">No active orders</span>
								</span>
							</a>
						</li>
						<!--
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-color-sampler"></i> <span>Themes</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Themes">
								<li class="nav-item"><a href="index.html" class="nav-link active">Default</a></li>
								<li class="nav-item"><a href="../../../LTR/material/full/index.html" class="nav-link">Material</a></li>
								<li class="nav-item"><a href="../../../LTR/dark/full/index.html" class="nav-link disabled">Dark <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
								<li class="nav-item"><a href="../../../LTR/clean/full/index.html" class="nav-link disabled">Clean <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-stack"></i> <span>Starter kit</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Starter kit">
								<li class="nav-item"><a href="../seed/layout_nav_horizontal.html" class="nav-link">Horizontal navigation</a></li>
								<li class="nav-item"><a href="../seed/sidebar_none.html" class="nav-link">No sidebar</a></li>
								<li class="nav-item"><a href="../seed/sidebar_main.html" class="nav-link">1 sidebar</a></li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">2 sidebars</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="../seed/sidebar_secondary.html" class="nav-link">Secondary sidebar</a></li>
										<li class="nav-item"><a href="../seed/sidebar_right.html" class="nav-link">Right sidebar</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">3 sidebars</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="../seed/sidebar_right_hidden.html" class="nav-link">Right sidebar hidden</a></li>
										<li class="nav-item"><a href="../seed/sidebar_right_visible.html" class="nav-link">Right sidebar visible</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Content sidebars</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="../seed/sidebar_content_left.html" class="nav-link">Left sidebar</a></li>
										<li class="nav-item"><a href="../seed/sidebar_content_right.html" class="nav-link">Right sidebar</a></li>
									</ul>
								</li>
								<li class="nav-item"><a href="../seed/layout_boxed.html" class="nav-link">Boxed layout</a></li>
								<li class="nav-item-divider"></li>
								<li class="nav-item"><a href="../seed/navbar_fixed_main.html" class="nav-link">Fixed main navbar</a></li>
								<li class="nav-item"><a href="../seed/navbar_fixed_secondary.html" class="nav-link">Fixed secondary navbar</a></li>
								<li class="nav-item"><a href="../seed/navbar_fixed_both.html" class="nav-link">Both navbars fixed</a></li>
								<li class="nav-item"><a href="../seed/layout_fixed.html" class="nav-link">Fixed layout</a></li>
							</ul>
						</li>
						<li class="nav-item">
							<a href="changelog.html" class="nav-link">
								<i class="icon-list-unordered"></i>
								<span>Changelog</span>
								<span class="badge bg-blue-400 align-self-center ml-auto">2.2</span>
							</a>
						</li>
						<li class="nav-item"><a href="../../../RTL/default/full/index.html" class="nav-link"><i class="icon-width"></i> <span>RTL version</span></a></li>
						<!-- /main -->

						<!-- Forms -->
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Tablas</div> <i class="icon-menu" title="Forms"></i></li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-pencil3"></i> <span>Empleados</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Form components">
								<li class="nav-item"><a href="form_inputs.php>" class="nav-link">Listar</a></li>
								<li class="nav-item"><a href="form_checkboxes_radios.php" class="nav-link">Agregar</a></li>
								<li class="nav-item"><a href="form_select2.php" class="nav-link">Editar</a></li>
								<!--
								<li class="nav-item"><a href="form_multiselect.html" class="nav-link">Bootstrap multiselect</a></li>
								<li class="nav-item"><a href="form_input_groups.html" class="nav-link">Input groups</a></li>
								<li class="nav-item"><a href="form_controls_extended.html" class="nav-link">Extended controls</a></li>
								<li class="nav-item"><a href="form_floating_labels.html" class="nav-link">Floating labels</a></li>
								<li class="nav-item"><a href="form_tag_inputs.html" class="nav-link">Tag inputs</a></li>
								<li class="nav-item"><a href="form_dual_listboxes.html" class="nav-link">Dual Listboxes</a></li>
								/-->
								<li class="nav-item"><a href="form_validation.php" class="nav-link">Departamento</a></li>
								<!--
								<li class="nav-item"><a href="form_wizard.html" class="nav-link">Form wizard</a></li>
								<li class="nav-item"><a href="form_actions.html" class="nav-link">Form actions</a></li>
								<li class="nav-item"><a href="form_inputs_grid.html" class="nav-link">Inputs grid</a></li>/-->
							</ul>
						</li>
						<li class="nav-item nav-item-submenu nav-item-expanded nav-item-open">
							<a href="#" class="nav-link"><i class="icon-file-css"></i> <span>Empresa</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="JSON forms">
								<li class="nav-item"><a href="alpaca_basic.php" class="nav-link">Listar</a></li>
								<li class="nav-item"><a href="alpaca_advanced.php>" class="nav-link active">Agregar</a></li>
								<li class="nav-item"><a href="alpaca_controls.php" class="nav-link">Editar</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-spell-check"></i> <span>Vacaciones</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Text editors">
								<li class="nav-item"><a href="editor_summernote.php" class="nav-link">Listar</a></li>
								<li class="nav-item"><a href="editor_ckeditor.php" class="nav-link">Agregar</a></li>
								<li class="nav-item"><a href="editor_trumbowyg.php" class="nav-link">Editar</a></li>
								<!--
								<li class="nav-item"><a href="editor_code.html" class="nav-link">Code editor</a></li>/-->
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-select2"></i> <span>Transporte</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Pickers">
								<li class="nav-item"><a href="picker_date.html" class="nav-link">Formulario</a></li>
								<!--
								<li class="nav-item"><a href="picker_color.html" class="nav-link">Color pickers</a></li>
								<li class="nav-item"><a href="picker_location.html" class="nav-link">Location pickers</a></li>/-->
							</ul>
						</li>
						<!--
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-insert-template"></i> <span>Form layouts</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Form layouts">
								<li class="nav-item"><a href="form_layout_vertical.html" class="nav-link">Vertical form</a></li>
								<li class="nav-item"><a href="form_layout_vertical_styled.html" class="nav-link disabled">Custom styles <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
								<li class="nav-item-divider"></li>
								<li class="nav-item"><a href="form_layout_horizontal.html" class="nav-link">Horizontal form</a></li>
								<li class="nav-item"><a href="form_layout_horizontal_styled.html" class="nav-link disabled">Custom styles <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
							</ul>
						</li>/-->
						<!-- /forms -->

						<!-- Components -->
						<!--
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Components</div> <i class="icon-menu" title="Components"></i></li>/-->
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-grid"></i> <span>Alumnos</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Basic components">
								<li class="nav-item"><a href="components_modals.html" class="nav-link">Listar</a></li>
								<li class="nav-item"><a href="components_dropdowns.html" class="nav-link">Agregar</a></li>
								<li class="nav-item"><a href="components_tabs.html" class="nav-link">Editar</a></li>
								<!--
								<li class="nav-item"><a href="components_pills.html" class="nav-link">Pills component</a></li>
								<li class="nav-item"><a href="components_collapsible.html" class="nav-link">Collapsible</a></li>
								<li class="nav-item"><a href="components_navs.html" class="nav-link">Navs</a></li>
								<li class="nav-item"><a href="components_buttons.html" class="nav-link">Buttons</a></li>
								<li class="nav-item"><a href="components_popups.html" class="nav-link">Tooltips and popovers</a></li>
								<li class="nav-item"><a href="components_alerts.html" class="nav-link">Alerts</a></li>
								<li class="nav-item"><a href="components_pagination.html" class="nav-link">Pagination</a></li>
								<li class="nav-item"><a href="components_badges.html" class="nav-link">Badges</a></li>
								<li class="nav-item"><a href="components_progress.html" class="nav-link">Progress</a></li>
								<li class="nav-item"><a href="components_breadcrumbs.html" class="nav-link">Breadcrumbs</a></li>
								<li class="nav-item"><a href="components_media.html" class="nav-link">Media objects</a></li>
								<li class="nav-item"><a href="components_scrollspy.html" class="nav-link">Scrollspy</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-puzzle2"></i> <span>Content styling</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Content styling">
								<li class="nav-item"><a href="content_page_header.html" class="nav-link">Page header</a></li>
								<li class="nav-item"><a href="content_page_footer.html" class="nav-link disabled">Page footer <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
								<li class="nav-item-divider"></li>
								<li class="nav-item"><a href="content_cards.html" class="nav-link">Cards</a></li>
								<li class="nav-item"><a href="content_cards_content.html" class="nav-link">Card content</a></li>
								<li class="nav-item"><a href="content_cards_layouts.html" class="nav-link">Card layouts</a></li>
								<li class="nav-item"><a href="content_cards_header.html" class="nav-link">Card header elements</a></li>
								<li class="nav-item"><a href="content_cards_footer.html" class="nav-link">Card footer elements</a></li>
								<li class="nav-item"><a href="content_cards_draggable.html" class="nav-link">Draggable cards</a></li>
								<li class="nav-item-divider"></li>
								<li class="nav-item"><a href="content_text_styling.html" class="nav-link">Text styling</a></li>
								<li class="nav-item"><a href="content_typography.html" class="nav-link">Typography</a></li>
								<li class="nav-item"><a href="content_helpers.html" class="nav-link">Helper classes</a></li>
								<li class="nav-item"><a href="content_helpers_flex.html" class="nav-link">Flex utilities</a></li>
								<li class="nav-item"><a href="content_syntax_highlighter.html" class="nav-link">Syntax highlighter</a></li>
								<li class="nav-item"><a href="content_grid.html" class="nav-link">Grid system</a></li>/-->
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-gift"></i> <span>Tutorias</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Extra components">
								<li class="nav-item"><a href="extra_pnotify.html" class="nav-link">Listar</a></li>
								<li class="nav-item"><a href="extra_jgrowl_noty.html" class="nav-link">Agregar</a></li>
								<!--
								<li class="nav-item"><a href="extra_sweetalert.html" class="nav-link">SweetAlert notifications</a></li>
								<li class="nav-item-divider"></li>/-->
								<li class="nav-item"><a href="extra_sliders_noui.html" class="nav-link">Editar</a></li>
								<!--
								<li class="nav-item"><a href="extra_sliders_ion.html" class="nav-link">Ion range sliders</a></li>
								<li class="nav-item"><a href="extra_trees.html" class="nav-link">Dynamic tree views</a></li>
								<li class="nav-item"><a href="extra_context_menu.html" class="nav-link">Context menu</a></li>
								<li class="nav-item"><a href="extra_fab.html" class="nav-link">Floating action buttons</a></li>
								<li class="nav-item"><a href="extra_session_timeout.html" class="nav-link">Session timeout</a></li>
								<li class="nav-item"><a href="extra_idle_timeout.html" class="nav-link">Idle timeout</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-droplet2"></i> <span>Color system</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Color system">
								<li class="nav-item"><a href="colors_primary.html" class="nav-link">Primary palette</a></li>
								<li class="nav-item"><a href="colors_danger.html" class="nav-link">Danger palette</a></li>
								<li class="nav-item"><a href="colors_success.html" class="nav-link">Success palette</a></li>
								<li class="nav-item"><a href="colors_warning.html" class="nav-link">Warning palette</a></li>
								<li class="nav-item"><a href="colors_info.html" class="nav-link">Info palette</a></li>
								<li class="nav-item-divider"></li>
								<li class="nav-item"><a href="colors_pink.html" class="nav-link">Pink palette</a></li>
								<li class="nav-item"><a href="colors_violet.html" class="nav-link">Violet palette</a></li>
								<li class="nav-item"><a href="colors_purple.html" class="nav-link">Purple palette</a></li>
								<li class="nav-item"><a href="colors_indigo.html" class="nav-link">Indigo palette</a></li>
								<li class="nav-item"><a href="colors_blue.html" class="nav-link">Blue palette</a></li>
								<li class="nav-item"><a href="colors_teal.html" class="nav-link">Teal palette</a></li>
								<li class="nav-item"><a href="colors_green.html" class="nav-link">Green palette</a></li>
								<li class="nav-item"><a href="colors_orange.html" class="nav-link">Orange palette</a></li>
								<li class="nav-item"><a href="colors_brown.html" class="nav-link">Brown palette</a></li>
								<li class="nav-item"><a href="colors_grey.html" class="nav-link">Grey palette</a></li>
								<li class="nav-item"><a href="colors_slate.html" class="nav-link">Slate palette</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-spinner2 spinner"></i> <span>Animations</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Animations">
								<li class="nav-item"><a href="animations_css3.html" class="nav-link">CSS3 animations</a></li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Velocity animations</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="animations_velocity_basic.html" class="nav-link">Basic usage</a></li>
										<li class="nav-item"><a href="animations_velocity_ui.html" class="nav-link">UI pack effects</a></li>
										<li class="nav-item"><a href="animations_velocity_examples.html" class="nav-link">Advanced examples</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-thumbs-up2"></i> <span>Icons</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Icons">
								<li class="nav-item"><a href="icons_icomoon.html" class="nav-link">Icomoon</a></li>
								<li class="nav-item"><a href="icons_material.html" class="nav-link">Material</a></li>
								<li class="nav-item"><a href="icons_fontawesome.html" class="nav-link">Font awesome</a></li>
							</ul>
						</li>
						<!-- /components -->

						<!-- Layout -->
						<!--
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Layout</div> <i class="icon-menu" title="Layout options"></i></li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-stack2"></i> <span>Page layouts</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Page layouts">
								<li class="nav-item"><a href="layout_fixed_navbar.html" class="nav-link">Fixed navbar</a></li>
								<li class="nav-item"><a href="layout_fixed_sidebar_custom.html" class="nav-link">Fixed sidebar - custom scroll</a></li>
								<li class="nav-item"><a href="layout_fixed_sidebar_native.html" class="nav-link">Fixed sidebar - native scroll</a></li>
								<li class="nav-item"><a href="layout_fixed_hideable_navbar.html" class="nav-link">Hideable navbar</a></li>
								<li class="nav-item"><a href="layout_fixed_footer.html" class="nav-link">Fixed footer</a></li>
								<li class="nav-item-divider"></li>
								<li class="nav-item"><a href="layout_boxed_default.html" class="nav-link">Boxed with default sidebar</a></li>
								<li class="nav-item"><a href="layout_boxed_mini.html" class="nav-link">Boxed with mini sidebar</a></li>
								<li class="nav-item"><a href="layout_boxed_full.html" class="nav-link">Boxed full width</a></li>
								<li class="nav-item"><a href="layout_boxed_content.html" class="nav-link">Boxed content</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-indent-decrease2"></i> <span>Sidebars</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Sidebars">
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Main sidebar</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="sidebar_default_collapse.html" class="nav-link">Default collapsible</a></li>
										<li class="nav-item"><a href="sidebar_default_hide.html" class="nav-link">Default hideable</a></li>
										<li class="nav-item"><a href="sidebar_default_hidden.html" class="nav-link">Default hidden</a></li>
										<li class="nav-item"><a href="sidebar_mini_collapse.html" class="nav-link">Mini collapsible</a></li>
										<li class="nav-item"><a href="sidebar_mini_hide.html" class="nav-link">Mini hideable</a></li>
										<li class="nav-item"><a href="sidebar_mini_hidden.html" class="nav-link">Mini hidden</a></li>
										<li class="nav-item-divider"></li>
										<li class="nav-item"><a href="sidebar_default_color_light.html" class="nav-link">Light color</a></li>
										<li class="nav-item"><a href="sidebar_default_color_custom.html" class="nav-link">Custom color</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Secondary sidebar</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="sidebar_secondary_after.html" class="nav-link">After default</a></li>
										<li class="nav-item"><a href="sidebar_secondary_before.html" class="nav-link">Before default</a></li>
										<li class="nav-item"><a href="sidebar_secondary_hidden.html" class="nav-link">Hidden by default</a></li>
										<li class="nav-item-divider"></li>
										<li class="nav-item"><a href="sidebar_secondary_color_dark.html" class="nav-link">Dark color</a></li>
										<li class="nav-item"><a href="sidebar_secondary_color_custom.html" class="nav-link">Custom color</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Right sidebar</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="sidebar_right_default_collapse.html" class="nav-link">Show - collapse main</a></li>
										<li class="nav-item"><a href="sidebar_right_default_hide.html" class="nav-link">Show - hide main</a></li>
										<li class="nav-item"><a href="sidebar_right_default_toggle.html" class="nav-link">Show - fix default width</a></li>
										<li class="nav-item"><a href="sidebar_right_mini_toggle.html" class="nav-link">Show - fix mini width</a></li>
										<li class="nav-item"><a href="sidebar_right_secondary_hide.html" class="nav-link">Show - hide secondary</a></li>
										<li class="nav-item"><a href="sidebar_right_visible.html" class="nav-link">Visible by default</a></li>
										<li class="nav-item-divider"></li>
										<li class="nav-item"><a href="sidebar_right_color_dark.html" class="nav-link">Dark color</a></li>
										<li class="nav-item"><a href="sidebar_right_color_custom.html" class="nav-link">Custom color</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Content sidebar</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="sidebar_content_left.html" class="nav-link">Left position</a></li>
										<li class="nav-item"><a href="sidebar_content_left_stretch.html" class="nav-link">Left stretched</a></li>
										<li class="nav-item"><a href="sidebar_content_left_hidden.html" class="nav-link">Left hidden</a></li>
										<li class="nav-item"><a href="sidebar_content_right.html" class="nav-link">Right position</a></li>
										<li class="nav-item"><a href="sidebar_content_right_stretch.html" class="nav-link">Right stretched</a></li>
										<li class="nav-item"><a href="sidebar_content_right_hidden.html" class="nav-link">Right hidden</a></li>
										<li class="nav-item"><a href="sidebar_content_sections.html" class="nav-link">Sectioned sidebar</a></li>
										<li class="nav-item-divider"></li>
										<li class="nav-item"><a href="sidebar_content_color_dark.html" class="nav-link">Dark color</a></li>
										<li class="nav-item"><a href="sidebar_content_color_custom.html" class="nav-link">Custom color</a></li>
										<li class="nav-item"><a href="sidebar_content_color_sections_custom.html" class="nav-link">Custom sections color</a></li>
									</ul>
								</li>
								<li class="nav-item-divider"></li>
								<li class="nav-item"><a href="sidebar_components.html" class="nav-link">Sidebar components</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-menu3"></i> <span>Navbars</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Navbars">
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Single navbar</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="navbar_single_top_static.html" class="nav-link">Single top static</a></li>
										<li class="nav-item"><a href="navbar_single_top_fixed.html" class="nav-link">Single top fixed</a></li>
										<li class="nav-item"><a href="navbar_single_bottom_static.html" class="nav-link">Single bottom static</a></li>
										<li class="nav-item"><a href="navbar_single_bottom_fixed.html" class="nav-link">Single bottom fixed</a></li>
										<li class="nav-item"><a href="navbar_single_header_before.html" class="nav-link">Before page header</a></li>
										<li class="nav-item"><a href="navbar_single_header_after.html" class="nav-link">After page header</a></li>
										<li class="nav-item"><a href="navbar_single_content_after.html" class="nav-link">After page content</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Multiple navbars</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="navbar_multiple_top_static.html" class="nav-link">Multiple top static</a></li>
										<li class="nav-item"><a href="navbar_multiple_top_fixed.html" class="nav-link">Multiple top fixed</a></li>
										<li class="nav-item"><a href="navbar_multiple_bottom_static.html" class="nav-link">Multiple bottom static</a></li>
										<li class="nav-item"><a href="navbar_multiple_bottom_fixed.html" class="nav-link">Multiple bottom fixed</a></li>
										<li class="nav-item"><a href="navbar_multiple_top_bottom.html" class="nav-link">Multiple - top and bottom</a></li>
										<li class="nav-item"><a href="navbar_multiple_secondary_sticky.html" class="nav-link">Multiple - secondary sticky</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Content navbar</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="navbar_component_single.html" class="nav-link">Single navbar</a></li>
										<li class="nav-item"><a href="navbar_component_multiple.html" class="nav-link">Multiple navbars</a></li>
									</ul>
								</li>
								<li class="nav-item-divider"></li>
								<li class="nav-item"><a href="navbar_colors.html" class="nav-link">Color options</a></li>
								<li class="nav-item"><a href="navbar_sizes.html" class="nav-link">Sizing options</a></li>
								<li class="nav-item"><a href="navbar_hideable.html" class="nav-link">Hide on scroll</a></li>
								<li class="nav-item"><a href="navbar_components.html" class="nav-link">Navbar components</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-sort"></i> <span>Vertical navigation</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Vertical navigation">
								<li class="nav-item"><a href="navigation_vertical_collapsible.html" class="nav-link">Collapsible menu</a></li>
								<li class="nav-item"><a href="navigation_vertical_accordion.html" class="nav-link">Accordion menu</a></li>
								<li class="nav-item"><a href="navigation_vertical_bordered.html" class="nav-link">Bordered navigation</a></li>
								<li class="nav-item"><a href="navigation_vertical_right_icons.html" class="nav-link">Right icons</a></li>
								<li class="nav-item"><a href="navigation_vertical_badges.html" class="nav-link">Badges</a></li>
								<li class="nav-item"><a href="navigation_vertical_disabled.html" class="nav-link">Disabled items</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-transmission"></i> <span>Horizontal navigation</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Horizontal navigation">
								<li class="nav-item"><a href="navigation_horizontal_click.html" class="nav-link">Submenu on click</a></li>
								<li class="nav-item"><a href="navigation_horizontal_hover.html" class="nav-link">Submenu on hover</a></li>
								<li class="nav-item"><a href="navigation_horizontal_elements.html" class="nav-link">With custom elements</a></li>
								<li class="nav-item"><a href="navigation_horizontal_tabs.html" class="nav-link">Tabbed navigation</a></li>
								<li class="nav-item"><a href="navigation_horizontal_disabled.html" class="nav-link">Disabled navigation links</a></li>
								<li class="nav-item"><a href="navigation_horizontal_mega.html" class="nav-link">Horizontal mega menu</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-tree5"></i> <span>Menu levels</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Menu levels">
								<li class="nav-item"><a href="#" class="nav-link"><i class="icon-IE"></i> Second level</a></li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link"><i class="icon-firefox"></i> Second level with child</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="#" class="nav-link"><i class="icon-android"></i> Third level</a></li>
										<li class="nav-item nav-item-submenu">
											<a href="#" class="nav-link"><i class="icon-apple2"></i> Third level with child</a>
											<ul class="nav nav-group-sub">
												<li class="nav-item"><a href="#" class="nav-link"><i class="icon-html5"></i> Fourth level</a></li>
												<li class="nav-item"><a href="#" class="nav-link"><i class="icon-css3"></i> Fourth level</a></li>
											</ul>
										</li>
										<li class="nav-item"><a href="#" class="nav-link"><i class="icon-windows"></i> Third level</a></li>
									</ul>
								</li>
								<li class="nav-item"><a href="#" class="nav-link"><i class="icon-chrome"></i> Second level</a></li>
							</ul>
						</li>
						<!-- /layout -->

						<!-- Data visualization -->
						<!--
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Data visualization</div> <i class="icon-menu" title="Data visualization"></i></li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-graph"></i> <span>Echarts library</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="ECharts library">
								<li class="nav-item"><a href="echarts_lines.html" class="nav-link">Line charts</a></li>
								<li class="nav-item"><a href="echarts_areas.html" class="nav-link">Area charts</a></li>
								<li class="nav-item"><a href="echarts_columns_waterfalls.html" class="nav-link">Columns and waterfalls</a></li>
								<li class="nav-item"><a href="echarts_bars_tornados.html" class="nav-link">Bars and tornados</a></li>
								<li class="nav-item"><a href="echarts_scatter.html" class="nav-link">Scatter charts</a></li>
								<li class="nav-item"><a href="echarts_pies_donuts.html" class="nav-link">Pies and donuts</a></li>
								<li class="nav-item"><a href="echarts_funnels_calendars.html" class="nav-link">Funnels and calendars</a></li>
								<li class="nav-item"><a href="echarts_candlesticks_others.html" class="nav-link">Candlesticks and others</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-statistics"></i> <span>D3 library</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="D3 library">
								<li class="nav-item"><a href="d3_lines_basic.html" class="nav-link">Simple lines</a></li>
								<li class="nav-item"><a href="d3_lines_advanced.html" class="nav-link">Advanced lines</a></li>
								<li class="nav-item"><a href="d3_bars_basic.html" class="nav-link">Simple bars</a></li>
								<li class="nav-item"><a href="d3_bars_advanced.html" class="nav-link">Advanced bars</a></li>
								<li class="nav-item"><a href="d3_pies.html" class="nav-link">Pie charts</a></li>
								<li class="nav-item"><a href="d3_circle_diagrams.html" class="nav-link">Circle diagrams</a></li>
								<li class="nav-item"><a href="d3_tree.html" class="nav-link">Tree layout</a></li>
								<li class="nav-item"><a href="d3_other.html" class="nav-link">Other charts</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-stats-dots"></i> <span>Dimple library</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Dimple library">
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Line charts</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="dimple_lines_horizontal.html" class="nav-link">Horizontal orientation</a></li>
										<li class="nav-item"><a href="dimple_lines_vertical.html" class="nav-link">Vertical orientation</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Bar charts</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="dimple_bars_horizontal.html" class="nav-link">Horizontal orientation</a></li>
										<li class="nav-item"><a href="dimple_bars_vertical.html" class="nav-link">Vertical orientation</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Area charts</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="dimple_area_horizontal.html" class="nav-link">Horizontal orientation</a></li>
										<li class="nav-item"><a href="dimple_area_vertical.html" class="nav-link">Vertical orientation</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Step charts</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="dimple_step_horizontal.html" class="nav-link">Horizontal orientation</a></li>
										<li class="nav-item"><a href="dimple_step_vertical.html" class="nav-link">Vertical orientation</a></li>
									</ul>
								</li>
								<li class="nav-item"><a href="dimple_pies.html" class="nav-link">Pie charts</a></li>
								<li class="nav-item"><a href="dimple_rings.html" class="nav-link">Ring charts</a></li>
								<li class="nav-item"><a href="dimple_scatter.html" class="nav-link">Scatter charts</a></li>
								<li class="nav-item"><a href="dimple_bubble.html" class="nav-link">Bubble charts</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-stats-bars"></i> <span>C3 library</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="C3 library">
								<li class="nav-item"><a href="c3_lines_areas.html" class="nav-link">Lines and areas</a></li>
								<li class="nav-item"><a href="c3_bars_pies.html" class="nav-link">Bars and pies</a></li>
								<li class="nav-item"><a href="c3_advanced.html" class="nav-link">Advanced examples</a></li>
								<li class="nav-item"><a href="c3_axis.html" class="nav-link">Chart axis</a></li>
								<li class="nav-item"><a href="c3_grid.html" class="nav-link">Grid options</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-google"></i> <span>Google charts</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Google charts">
								<li class="nav-item"><a href="google_lines.html" class="nav-link">Line charts</a></li>
								<li class="nav-item"><a href="google_bars.html" class="nav-link">Bar charts</a></li>
								<li class="nav-item"><a href="google_pies.html" class="nav-link">Pie charts</a></li>
								<li class="nav-item"><a href="google_scatter_bubble.html" class="nav-link">Bubble &amp; scatter charts</a></li>
								<li class="nav-item"><a href="google_other.html" class="nav-link">Other charts</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-map5"></i> <span>Maps integration</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Maps integration">
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Google maps</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="maps_google_basic.html" class="nav-link">Basics</a></li>
										<li class="nav-item"><a href="maps_google_controls.html" class="nav-link">Controls</a></li>
										<li class="nav-item"><a href="maps_google_markers.html" class="nav-link">Markers</a></li>
										<li class="nav-item"><a href="maps_google_drawings.html" class="nav-link">Map drawings</a></li>
										<li class="nav-item"><a href="maps_google_layers.html" class="nav-link ">Layers</a></li>
									</ul>
								</li>
								<li class="nav-item"><a href="maps_vector.html" class="nav-link">Vector maps</a></li>
								<li class="nav-item"><a href="maps_echarts.html" class="nav-link disabled">ECharts maps <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
							</ul>
						</li>
						<!-- /data visualization -->

						<!-- Extensions -->
						<!--
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Extensions</div> <i class="icon-menu" title="Extensions"></i></li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-puzzle4"></i> <span>Extensions</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Extensions">
								<li class="nav-item"><a href="extension_image_cropper.html" class="nav-link">Image cropper</a></li>
								<li class="nav-item"><a href="extension_blockui.html" class="nav-link">Block UI</a></li>
								<li class="nav-item"><a href="extension_dnd.html" class="nav-link">Drag and drop</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-popout"></i> <span>JQuery UI</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="jQuery UI">
								<li class="nav-item"><a href="jqueryui_interactions.html" class="nav-link">Interactions</a></li>
								<li class="nav-item"><a href="jqueryui_forms.html" class="nav-link">Forms</a></li>
								<li class="nav-item"><a href="jqueryui_components.html" class="nav-link">Components</a></li>
								<li class="nav-item"><a href="jqueryui_sliders.html" class="nav-link">Sliders</a></li>
								<li class="nav-item"><a href="jqueryui_navigation.html" class="nav-link">Navigation</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-upload"></i> <span>File uploaders</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="File uploaders">
								<li class="nav-item"><a href="uploader_plupload.html" class="nav-link">Plupload</a></li>
								<li class="nav-item"><a href="uploader_bootstrap.html" class="nav-link">Bootstrap file uploader</a></li>
								<li class="nav-item"><a href="uploader_dropzone.html" class="nav-link">Dropzone</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-calendar3"></i> <span>Event calendars</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Event calendars">
								<li class="nav-item"><a href="fullcalendar_views.html" class="nav-link">Basic views</a></li>
								<li class="nav-item"><a href="fullcalendar_styling.html" class="nav-link">Event styling</a></li>
								<li class="nav-item"><a href="fullcalendar_formats.html" class="nav-link">Language and time</a></li>
								<li class="nav-item"><a href="fullcalendar_advanced.html" class="nav-link">Advanced usage</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-sphere"></i> <span>Internationalization</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Internationalization">
								<li class="nav-item"><a href="internationalization_switch_direct.html" class="nav-link">Direct translation</a></li>
								<li class="nav-item"><a href="internationalization_switch_query.html" class="nav-link">Querystring parameter</a></li>
								<li class="nav-item"><a href="internationalization_fallback.html" class="nav-link">Language fallback</a></li>
								<li class="nav-item"><a href="internationalization_callbacks.html" class="nav-link">Callbacks</a></li>
							</ul>
						</li>
						<!-- /extensions -->

						<!-- Tables -->
						<!--
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Tables</div> <i class="icon-menu" title="Tables"></i></li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-table2"></i> <span>Basic tables</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Basic tables">
								<li class="nav-item"><a href="table_basic.html" class="nav-link">Basic examples</a></li>
								<li class="nav-item"><a href="table_sizing.html" class="nav-link">Table sizing</a></li>
								<li class="nav-item"><a href="table_borders.html" class="nav-link">Table borders</a></li>
								<li class="nav-item"><a href="table_styling.html" class="nav-link">Table styling</a></li>
								<li class="nav-item"><a href="table_elements.html" class="nav-link">Table elements</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-grid7"></i> <span>Data tables</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Data tables">
								<li class="nav-item"><a href="datatable_basic.html" class="nav-link">Basic initialization</a></li>
								<li class="nav-item"><a href="datatable_styling.html" class="nav-link">Basic styling</a></li>
								<li class="nav-item"><a href="datatable_advanced.html" class="nav-link">Advanced examples</a></li>
								<li class="nav-item"><a href="datatable_sorting.html" class="nav-link">Sorting options</a></li>
								<li class="nav-item"><a href="datatable_api.html" class="nav-link">Using API</a></li>
								<li class="nav-item"><a href="datatable_data_sources.html" class="nav-link">Data sources</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-alignment-unalign"></i> <span>Data tables extensions</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Data tables extensions">
								<li class="nav-item"><a href="datatable_extension_reorder.html" class="nav-link">Columns reorder</a></li>
								<li class="nav-item"><a href="datatable_extension_row_reorder.html" class="nav-link">Row reorder</a></li>
								<li class="nav-item"><a href="datatable_extension_fixed_columns.html" class="nav-link">Fixed columns</a></li>
								<li class="nav-item"><a href="datatable_extension_fixed_header.html" class="nav-link">Fixed header</a></li>
								<li class="nav-item"><a href="datatable_extension_autofill.html" class="nav-link">Auto fill</a></li>
								<li class="nav-item"><a href="datatable_extension_key_table.html" class="nav-link">Key table</a></li>
								<li class="nav-item"><a href="datatable_extension_scroller.html" class="nav-link">Scroller</a></li>
								<li class="nav-item"><a href="datatable_extension_select.html" class="nav-link">Select</a></li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Buttons</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="datatable_extension_buttons_init.html" class="nav-link">Initialization</a></li>
										<li class="nav-item"><a href="datatable_extension_buttons_flash.html" class="nav-link">Flash buttons</a></li>
										<li class="nav-item"><a href="datatable_extension_buttons_print.html" class="nav-link">Print buttons</a></li>
										<li class="nav-item"><a href="datatable_extension_buttons_html5.html" class="nav-link">HTML5 buttons</a></li>
									</ul>
								</li>
								<li class="nav-item"><a href="datatable_extension_colvis.html" class="nav-link">Columns visibility</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-file-spreadsheet"></i> <span>Handsontable</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Handsontable">
								<li class="nav-item"><a href="handsontable_basic.html" class="nav-link">Basic configuration</a></li>
								<li class="nav-item"><a href="handsontable_advanced.html" class="nav-link">Advanced setup</a></li>
								<li class="nav-item"><a href="handsontable_cols.html" class="nav-link">Column features</a></li>
								<li class="nav-item"><a href="handsontable_cells.html" class="nav-link">Cell features</a></li>
								<li class="nav-item"><a href="handsontable_types.html" class="nav-link">Basic cell types</a></li>
								<li class="nav-item"><a href="handsontable_custom_checks.html" class="nav-link">Custom &amp; checkboxes</a></li>
								<li class="nav-item"><a href="handsontable_ac_password.html" class="nav-link">Autocomplete &amp; password</a></li>
								<li class="nav-item"><a href="handsontable_search.html" class="nav-link">Search</a></li>
								<li class="nav-item"><a href="handsontable_context.html" class="nav-link">Context menu</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-versions"></i> <span>Responsive tables</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Responsive tables">
								<li class="nav-item"><a href="table_responsive.html" class="nav-link">Responsive basic tables</a></li>
								<li class="nav-item"><a href="datatable_responsive.html" class="nav-link">Responsive data tables</a></li>
							</ul>
						</li>
						<!-- /tables -->

						<!-- Page kits -->
						<!--
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Page kits</div> <i class="icon-menu" title="Page kits"></i></li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-grid6"></i> <span>General pages</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="General pages">
								<li class="nav-item"><a href="general_feed.html" class="nav-link">Feed</a></li>
								<li class="nav-item"><a href="general_embeds.html" class="nav-link">Embeds</a></li>
								<li class="nav-item"><a href="general_faq.html" class="nav-link">FAQ page</a></li>
								<li class="nav-item"><a href="general_knowledgebase.html" class="nav-link">Knowledgebase</a></li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Blog</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="blog_classic_v.html" class="nav-link">Classic vertical</a></li>
										<li class="nav-item"><a href="blog_classic_h.html" class="nav-link">Classic horizontal</a></li>
										<li class="nav-item"><a href="blog_grid.html" class="nav-link">Grid</a></li>
										<li class="nav-item"><a href="blog_single.html" class="nav-link">Single post</a></li>
										<li class="nav-item-divider"></li>
										<li class="nav-item"><a href="blog_sidebar_left.html" class="nav-link">Left sidebar</a></li>
										<li class="nav-item"><a href="blog_sidebar_right.html" class="nav-link">Right sidebar</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Timelines</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="timelines_left.html" class="nav-link">Left timeline</a></li>
										<li class="nav-item"><a href="timelines_right.html" class="nav-link">Right timeline</a></li>
										<li class="nav-item"><a href="timelines_center.html" class="nav-link">Centered timeline</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Gallery</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="gallery_grid.html" class="nav-link">Media grid</a></li>
										<li class="nav-item"><a href="gallery_titles.html" class="nav-link">Media with titles</a></li>
										<li class="nav-item"><a href="gallery_description.html" class="nav-link">Media with description</a></li>
										<li class="nav-item"><a href="gallery_library.html" class="nav-link">Media library</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-wrench3"></i> <span>Service pages</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Service pages">
								<li class="nav-item"><a href="service_sitemap.html" class="nav-link">Sitemap</a></li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Invoicing</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="invoice_template.html" class="nav-link">Invoice template</a></li>
										<li class="nav-item"><a href="invoice_grid.html" class="nav-link">Invoice grid</a></li>
										<li class="nav-item"><a href="invoice_archive.html" class="nav-link">Invoice archive</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Authentication</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="login_simple.html" class="nav-link">Simple login</a></li>
										<li class="nav-item"><a href="login_advanced.html" class="nav-link">More login info</a></li>
										<li class="nav-item"><a href="login_registration.html" class="nav-link">Simple registration</a></li>
										<li class="nav-item"><a href="login_registration_advanced.html" class="nav-link">More registration info</a></li>
										<li class="nav-item"><a href="login_unlock.html" class="nav-link">Unlock user</a></li>
										<li class="nav-item"><a href="login_password_recover.html" class="nav-link">Reset password</a></li>
										<li class="nav-item"><a href="login_hide_navbar.html" class="nav-link">Hide navbar</a></li>
										<li class="nav-item"><a href="login_transparent.html" class="nav-link">Transparent box</a></li>
										<li class="nav-item"><a href="login_background.html" class="nav-link">Background option</a></li>
										<li class="nav-item"><a href="login_validation.html" class="nav-link">With validation</a></li>
										<li class="nav-item"><a href="login_tabbed.html" class="nav-link">Tabbed form</a></li>
										<li class="nav-item"><a href="login_modals.html" class="nav-link">Inside modals</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Error pages</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="error_403.html" class="nav-link">Error 403</a></li>
										<li class="nav-item"><a href="error_404.html" class="nav-link">Error 404</a></li>
										<li class="nav-item"><a href="error_405.html" class="nav-link">Error 405</a></li>
										<li class="nav-item"><a href="error_500.html" class="nav-link">Error 500</a></li>
										<li class="nav-item"><a href="error_503.html" class="nav-link">Error 503</a></li>
										<li class="nav-item"><a href="error_offline.html" class="nav-link">Offline page</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-people"></i> <span>User pages</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="User pages">
								<li class="nav-item"><a href="user_pages_list.html" class="nav-link">User list</a></li>
								<li class="nav-item"><a href="user_pages_cards.html" class="nav-link">User cards</a></li>
								<li class="nav-item"><a href="user_pages_profile.html" class="nav-link">Simple profile</a></li>
								<li class="nav-item"><a href="user_pages_profile_tabbed.html" class="nav-link">Tabbed profile</a></li>
								<li class="nav-item"><a href="user_pages_profile_cover.html" class="nav-link">Profile with cover</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-cube3"></i> <span>Application pages</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Application pages">
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Task manager</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="task_manager_grid.html" class="nav-link">Task grid</a></li>
										<li class="nav-item"><a href="task_manager_list.html" class="nav-link">Task list</a></li>
										<li class="nav-item"><a href="task_manager_detailed.html" class="nav-link">Task detailed</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Inbox</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="mail_list.html" class="nav-link">Mail list</a></li>
										<li class="nav-item"><a href="mail_list_detached.html" class="nav-link">Mail list (detached)</a></li>
										<li class="nav-item"><a href="mail_read.html" class="nav-link">Read mail</a></li>
										<li class="nav-item"><a href="mail_write.html" class="nav-link">Write mail</a></li>
										<li class="nav-item-divider"></li>
										<li class="nav-item"><a href="chat_layouts.html" class="nav-link">Chat layouts</a></li>
										<li class="nav-item"><a href="chat_options.html" class="nav-link">Chat options</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Search</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="search_basic.html" class="nav-link">Basic search results</a></li>
										<li class="nav-item"><a href="search_users.html" class="nav-link">User search results</a></li>
										<li class="nav-item"><a href="search_images.html" class="nav-link">Image search results</a></li>
										<li class="nav-item"><a href="search_videos.html" class="nav-link">Video search results</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Job search</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="job_list_cards.html" class="nav-link">Cards view</a></li>
										<li class="nav-item"><a href="job_list_list.html" class="nav-link">List view</a></li>
										<li class="nav-item"><a href="job_detailed.html" class="nav-link">Job detailed</a></li>
										<li class="nav-item"><a href="job_apply.html" class="nav-link">Apply</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Learning</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="learning_list.html" class="nav-link">List view</a></li>
										<li class="nav-item"><a href="learning_grid.html" class="nav-link">Grid view</a></li>
										<li class="nav-item"><a href="learning_detailed.html" class="nav-link">Detailed course</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Ecommerce set</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="ecommerce_product_list.html" class="nav-link">Product list</a></li>
										<li class="nav-item"><a href="ecommerce_product_grid.html" class="nav-link">Product grid</a></li>
										<li class="nav-item"><a href="ecommerce_orders_history.html" class="nav-link">Orders history</a></li>
										<li class="nav-item"><a href="ecommerce_customers.html" class="nav-link">Customers</a></li>
										<li class="nav-item"><a href="ecommerce_pricing.html" class="nav-link">Pricing tables</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-atom2"></i> <span>Widgets</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Widgets">
								<li class="nav-item"><a href="widgets_content.html" class="nav-link">Content widgets</a></li>
								<li class="nav-item"><a href="widgets_stats.html" class="nav-link">Statistics widgets</a></li>
								<li class="nav-item"><a href="widgets_menu.html" class="nav-link disabled">Menu widgets <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
								<li class="nav-item"><a href="widgets_form.html" class="nav-link disabled">Form widgets <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
							</ul>
						</li>/-->
						<!-- /page kits -->

					</ul>
				</div>
				<!-- /main navigation -->

			</div>
			<!-- /sidebar content -->
			
		</div>
		<!-- /main sidebar -->


		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Page header -->
			<div class="page-header page-header-light">
				<div class="page-header-content header-elements-md-inline">
					<div class="page-title d-flex">
						<h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Empresas</span> - Agregar</h4>
						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>

					<div class="header-elements d-none">
						<div class="d-flex justify-content-center">
							<a href="#" class="btn btn-link btn-float text-default"><i class="icon-bars-alt text-primary"></i><span>Statistics</span></a>
							<a href="#" class="btn btn-link btn-float text-default"><i class="icon-calculator text-primary"></i> <span>Invoices</span></a>
							<a href="#" class="btn btn-link btn-float text-default"><i class="icon-calendar5 text-primary"></i> <span>Schedule</span></a>
						</div>
					</div>
				</div>

				<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
					<div class="d-flex">
						<div class="breadcrumb">
							<a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
							<a href="alpaca_advanced.html" class="breadcrumb-item">Empresas</a>
							<span class="breadcrumb-item active">Agregar</span>
						</div>

						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>

					<div class="header-elements d-none">
						<div class="breadcrumb justify-content-center">
							<a href="#" class="breadcrumb-elements-item">
								<i class="icon-comment-discussion mr-2"></i>
								Support
							</a>

							<div class="breadcrumb-elements-item dropdown p-0">
								<a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">
									<i class="icon-gear mr-2"></i>
									Settings
								</a>

								<div class="dropdown-menu dropdown-menu-right">
									<a href="#" class="dropdown-item"><i class="icon-user-lock"></i> Account security</a>
									<a href="#" class="dropdown-item"><i class="icon-statistics"></i> Analytics</a>
									<a href="#" class="dropdown-item"><i class="icon-accessibility"></i> Accessibility</a>
									<div class="dropdown-divider"></div>
									<a href="#" class="dropdown-item"><i class="icon-gear"></i> All settings</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /page header -->


			<!-- Content area -->
			<div class="content">

								<!-- Form inputs -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Empresas</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<!--
						<p class="mb-4">Examples of standard form controls supported in an example form layout. Individual form controls automatically receive some global styling. All textual <code>&lt;input></code>, <code>&lt;textarea></code>, and <code>&lt;select></code> elements with <code>.form-control</code> are set to <code>width: 100%;</code> by default. Wrap labels and controls in <code>.form-group</code> for optimum spacing. Labels in horizontal form require <code>.col-form-label</code> class.</p>/-->

						<form action="#">
							<fieldset class="mb-3">
								<legend class="text-uppercase font-size-sm font-weight-bold">Introducir Datos Basicos</legend>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Nombre</label>
									<div class="col-lg-10">
										<input type="text" class="form-control">
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Sector</label>
									<div class="col-lg-10">
										<input type="text" class="form-control">
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Clave</label>
									<div class="col-lg-10">
										<input type="text" class="form-control" maxlength="7" placeholder="7 digitos">
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Ciudad</label>
									<div class="col-lg-10">
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-form-label col-lg-2">Pais</label>
									<div class="col-lg-10">
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-form-label col-lg-2">Horario</label>
									<div class="col-lg-10">
										<input type="text" class="form-control">
									</div>
								</div>
								<!--
								<div class="form-group row">
									<label class="col-form-label col-lg-2">Disabled field</label>
									<div class="col-lg-10">
										<input type="text" class="form-control" disabled value="disabled">
									</div>
								</div>
								/-->
								<div class="form-group row">
									<label class="col-form-label col-lg-2">Nùmero de Sucursales</label>
									<div class="col-lg-10">
										<input type="text" class="form-control">
									</div>
								</div>
								<!--
								<div class="form-group row">
									<label class="col-form-label col-lg-2">Disabled autocomplete</label>
									<div class="col-lg-10">
										<input type="text" class="form-control" placeholder="Autocomplete is off" autocomplete="off">
									</div>
								</div>
								/-->
								<div class="form-group row">
									<label class="col-form-label col-lg-2">Tipo</label>
									<div class="col-lg-10">
										<input type="text" class="form-control">
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Registrada</label>
									<div class="col-lg-10">
										<input type="text" class="form-control" maxlength="2">
									</div>
								</div>
								<!--
								<div class="form-group row">
									<label class="col-form-label col-lg-2 cursor-pointer" for="clickable-label">Focus on label click</label>
									<div class="col-lg-10">
										<input type="text" class="form-control" id="clickable-label" placeholder="Field focus on label click">
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Static text</label>
									<div class="col-lg-10">
										<div class="form-control-plaintext">This is a static text</div>
									</div>
								</div>
								/-->
								<!--
								<div class="form-group row">
									<label class="col-form-label col-lg-2">Descripción</label>
									<div class="col-lg-10">
										<textarea rows="3" cols="3" class="form-control" placeholder="Default textarea"></textarea>
									</div>
								</div>
							</fieldset>
							<!--
							<fieldset class="mb-3">
								<legend class="text-uppercase font-size-sm font-weight-bold">Basic selects</legend>
								/-->
								<!--
		                        <div class="form-group row">
		                        	<label class="col-form-label col-lg-2">Single select</label>
		                        	<div class="col-lg-10">
			                            <select class="form-control">
			                                <option value="opt1">Default select</option>
			                                <option value="opt2">Ezer</option>
			                                <option value="opt3">Karen</option>
			                                <option value="opt4">Adair</option>
			                                <option value="opt5">Angel</option>
			                            </select>
		                            </div>
		                        </div>
		                        <!--
		                        <div class="form-group row">
		                        	<label class="col-form-label col-lg-2">Styled select</label>
		                        	<div class="col-lg-10">
			                            <select class="form-control form-control-uniform" data-fouc>
			                                <option value="opt1">Styled select box</option>
			                                <option value="opt2">Option 2</option>
			                                <option value="opt3">Option 3</option>
			                                <option value="opt4">Option 4</option>
			                                <option value="opt5">Option 5</option>
			                                <option value="opt6">Option 6</option>
			                                <option value="opt7">Option 7</option>
			                                <option value="opt8">Option 8</option>
			                            </select>
		                            </div>
		                        </div>

		                        <div class="form-group row">
		                        	<label class="col-form-label col-lg-2">Custom BS select</label>
		                        	<div class="col-lg-10">
			                            <select class="custom-select">
			                                <option value="opt1">Styled select box</option>
			                                <option value="opt2">Option 2</option>
			                                <option value="opt3">Option 3</option>
			                                <option value="opt4">Option 4</option>
			                                <option value="opt5">Option 5</option>
			                                <option value="opt6">Option 6</option>
			                                <option value="opt7">Option 7</option>
			                                <option value="opt8">Option 8</option>
			                            </select>
		                            </div>
		                        </div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Multiple select</label>
									<div class="col-lg-10">
			                            <select multiple="multiple" class="form-control">
			                                <option selected>Amsterdam</option>      
			                                <option selected>Atlanta</option>
			                                <option>Baltimore</option>
			                                <option>Boston</option>
			                                <option>Buenos Aires</option>
			                                <option>Calgary</option>
			                                <option selected>Chicago</option>
			                                <option>Denver</option>
			                                <option>Dubai</option>
			                                <option>Frankfurt</option>
			                                <option>Hong Kong</option>
			                                <option>Honolulu</option>
			                                <option>Houston</option>
			                                <option>Kuala Lumpur</option>
			                                <option>London</option>
			                                <option>Los Angeles</option>
			                                <option>Melbourne</option>
			                                <option>Mexico City</option>
			                                <option>Miami</option>
			                                <option>Minneapolis</option>
			                            </select>
									</div>
								</div>
							</fieldset>

							<fieldset class="mb-3">
								<legend class="text-uppercase font-size-sm font-weight-bold">Basic file inputs</legend>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Default file input</label>
									<div class="col-lg-10">
										<input type="file" class="form-control h-auto">
									</div>
								</div>
								
								<div class="form-group row">
									<label class="col-form-label col-lg-2">Styled file input</label>
									<div class="col-lg-10">
										<input type="file" class="form-control-uniform" data-fouc>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Custom BS file input</label>
									<div class="col-lg-10">
										<div class="custom-file">
											<input type="file" class="custom-file-input" id="customFile">
											<label class="custom-file-label" for="customFile">Choose file</label>
										</div>
									</div>
								</div>
							</fieldset>

							<fieldset class="mb-3">
								<legend class="text-uppercase font-size-sm font-weight-bold">Form helpers</legend>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Text form helpers</label>
									<div class="col-lg-10">
										<div class="row">
											<div class="col-md-4">
												<input type="text" class="form-control">
												<span class="form-text text-muted">Left aligned helper</span>
											</div>

											<div class="col-md-4">
												<input type="text" class="form-control">
												<span class="form-text text-muted text-center">Centered helper</span>
											</div>

											<div class="col-md-4">
												<input type="text" class="form-control">
												<span class="form-text text-muted text-right">Right aligned helper</span>
											</div>
										</div>
									</div>
								</div>
								
								<div class="form-group row">
									<label class="col-form-label col-lg-2">Full width badge helpers</label>
									<div class="col-lg-10">
										<div class="row">
											<div class="col-md-4">
												<input type="text" class="form-control">
												<span class="badge d-block badge-primary form-text text-left">Left aligned badge</span>
											</div>

											<div class="col-md-4">
												<input type="text" class="form-control">
												<span class="badge d-block badge-danger form-text">Centered badge</span>
											</div>

											<div class="col-md-4">
												<input type="text" class="form-control">
												<span class="badge d-block badge-info form-text text-right">Right aligned badge</span>
											</div>
										</div>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Block badge helpers</label>
									<div class="col-lg-10">
										<div class="row">
											<div class="col-md-4">
												<input type="text" class="form-control">
												<div class="d-block form-text">
													<span class="badge badge-primary">Left aligned badge</span>
												</div>
											</div>

											<div class="col-md-4">
												<input type="text" class="form-control">
												<div class="d-block form-text text-center">
													<span class="badge badge-danger">Centered badge</span>
												</div>
											</div>

											<div class="col-md-4">
												<input type="text" class="form-control">
												<div class="d-block form-text text-right">
													<span class="badge badge-info text-right">Right aligned badge</span>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Inline text helper</label>
									<div class="col-lg-10">
										<div class="row">
											<div class="col-lg-6">
												<input type="text" class="form-control">
											</div>
											<div class="col-lg-6 mt-1 mt-lg-0 align-self-center">
												<span class="text-muted">Inline text helper</span>
											</div>
										</div>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Inline badge helper</label>
									<div class="col-lg-10">
										<div class="row">
											<div class="col-lg-6">
												<input type="text" class="form-control">
											</div>
											<div class="col-lg-6 mt-1 mt-lg-0 align-self-center">
												<span class="badge bg-teal">Inline badge helper</span>
											</div>
										</div>
									</div>
								</div>
							</fieldset>

							<fieldset class="mb-3">
								<legend class="text-uppercase font-size-sm font-weight-bold">Input icons</legend>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Input with icons</label>
									<div class="col-lg-10">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group form-group-feedback form-group-feedback-left">
													<input type="text" class="form-control form-control-lg" placeholder="Left icon, input large">
													<div class="form-control-feedback form-control-feedback-lg">
														<i class="icon-make-group"></i>
													</div>
												</div>

												<div class="form-group form-group-feedback form-group-feedback-left">
													<input type="text" class="form-control" placeholder="Left icon, input default">
													<div class="form-control-feedback">
														<i class="icon-droplets"></i>
													</div>
												</div>

												<div class="form-group form-group-feedback form-group-feedback-left">
													<input type="text" class="form-control form-control-sm" placeholder="Left icon, input small">
													<div class="form-control-feedback form-control-feedback-sm">
														<i class="icon-pin-alt"></i>
													</div>
												</div>
											</div>

											<div class="col-md-6">
												<div class="form-group form-group-feedback form-group-feedback-right">
													<input type="text" class="form-control form-control-lg" placeholder="Right icon, input large">
													<div class="form-control-feedback form-control-feedback-lg">
														<i class="icon-make-group"></i>
													</div>
												</div>

												<div class="form-group form-group-feedback form-group-feedback-right">
													<input type="text" class="form-control" placeholder="Right icon, input default">
													<div class="form-control-feedback">
														<i class="icon-droplets"></i>
													</div>
												</div>

												<div class="form-group form-group-feedback form-group-feedback-right">
													<input type="text" class="form-control form-control-sm" placeholder="Right icon, input small">
													<div class="form-control-feedback form-control-feedback-sm">
														<i class="icon-pin-alt"></i>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Input with spinners</label>
									<div class="col-lg-10">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group form-group-feedback form-group-feedback-left">
													<input type="text" class="form-control" placeholder="Left spinner">
													<div class="form-control-feedback">
														<i class="icon-spinner2 spinner"></i>
													</div>
												</div>
											</div>

											<div class="col-md-6">
												<div class="form-group form-group-feedback form-group-feedback-right">
													<input type="text" class="form-control" placeholder="Right spinner">
													<div class="form-control-feedback">
														<i class="icon-spinner2 spinner"></i>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</fieldset>

							<fieldset class="mb-3">
								<legend class="text-uppercase font-size-sm font-weight-bold">Validation states</legend>

								<div class="form-group row">
									<label class="col-form-label col-lg-2 font-weight-semibold text-success">Valid state</label>
									<div class="col-lg-10">
										<input type="text" class="form-control border-success" placeholder="Valid state">
										<span class="form-text text-success">Valid state helper</span>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2 font-weight-semibold text-success">Valid state with icon</label>
									<div class="col-lg-10">
										<div class="form-group-feedback form-group-feedback-right">
											<input type="text" class="form-control border-success" placeholder="Valid state">
											<div class="form-control-feedback text-success">
												<i class="icon-checkmark-circle"></i>
											</div>
										</div>
										<span class="form-text text-success">Valid state helper</span>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2 font-weight-semibold text-danger">Invalid state</label>
									<div class="col-lg-10">
										<input type="text" class="form-control border-danger" placeholder="Invalid state">
										<span class="form-text text-danger">Invalid state helper</span>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2 font-weight-semibold text-danger">Invalid state with icon</label>
									<div class="col-lg-10">
										<div class="form-group-feedback form-group-feedback-right">
											<input type="text" class="form-control border-danger" placeholder="Invalid state">
											<div class="form-control-feedback text-danger">
												<i class="icon-cancel-circle2"></i>
											</div>
										</div>
										<span class="form-text text-danger">Invalid state helper</span>
									</div>
								</div>
							</fieldset>

							<fieldset class="mb-3">
								<legend class="text-uppercase font-size-sm font-weight-bold">Text options</legend>

								<div class="form-group row">
									<label class="col-form-label col-md-2">Light text</label>
									<div class="col-md-10">
										<input type="text" class="form-control font-weight-light" placeholder="Input with light text">
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-md-2">Semibold text</label>
									<div class="col-md-10">
										<input type="text" class="form-control font-weight-semibold" placeholder="Input with semibold text">
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-md-2">Bold text</label>
									<div class="col-md-10">
										<input type="text" class="form-control font-weight-bold" placeholder="Input with bold text">
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-md-2">Capitalized text</label>
									<div class="col-md-10">
										<input type="text" class="form-control text-capitalize" placeholder="Input with capitalized text">
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-md-2">Centered text</label>
									<div class="col-md-10">
										<input type="text" class="form-control text-center" placeholder="Input with centered text">
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-md-2">Right aligned text</label>
									<div class="col-md-10">
										<input type="text" class="form-control text-right" placeholder="Input with right aligned text">
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-md-2">Uppercase text</label>
									<div class="col-md-10">
										<input type="text" class="form-control text-uppercase" placeholder="Input with uppercase text">
										<span class="form-text text-muted">Other text options work as well</span>
									</div>
								</div>
							</fieldset>

							<fieldset class="mb-3">
								<legend class="text-uppercase font-size-sm font-weight-bold">Field options</legend>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Tooltip on focus</label>
									<div class="col-lg-10">
										<input type="text" class="form-control" data-popup="tooltip" data-trigger="focus" title="Tooltip on focus" placeholder="Click on input">
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Tooltip on hover</label>
									<div class="col-lg-10">
										<input type="text" class="form-control" data-popup="tooltip" title="Tooltip on hover" placeholder="Hover on input">
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-md-2">Rounded input</label>
									<div class="col-md-10">
										<input type="text" class="form-control rounded-round" placeholder="Rounded input">
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-md-2">Roundless input</label>
									<div class="col-md-10">
										<input type="text" class="form-control rounded-0" placeholder="Roundless input">
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Fixed input sizing</label>
									<div class="col-lg-10">
										<div class="row">
											<div class="col-3">
												<input type="text" class="form-control" placeholder=".col-3">
											</div>

											<div class="col-4">
												<input type="text" class="form-control" placeholder=".col-4">
											</div>

											<div class="col-5">
												<input type="text" class="form-control" placeholder=".col-5">
											</div>
										</div>
										<span class="form-text text-muted">Available in 12 columns sizes since it's based on 12 columns grid</span>
									</div>
								</div>
							</fieldset>

							<fieldset class="mb-3">
								<legend class="text-uppercase font-size-sm font-weight-bold">Sizing options</legend>

								<div class="form-group row">
									<label class="col-form-label col-form-label-lg col-lg-2">Large size</label>
									<div class="col-lg-10">
										<input type="text" class="form-control form-control-lg" placeholder=".col-form-label-lg .form-control-lg">
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Default size</label>
									<div class="col-lg-10">
										<input type="text" class="form-control" placeholder=".col-form-label .form-control">
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-form-label-sm col-lg-2">Small size</label>
									<div class="col-lg-10">
										<input type="text" class="form-control form-control-sm" placeholder=".col-form-label-sm .form-control-sm">
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Inputs only</label>
									<div class="col-lg-10">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<input class="form-control form-control-lg" type="text" placeholder="Large input height">
												</div>

												<div class="form-group">
													<input class="form-control" type="text" placeholder="Default input height">
												</div>

												<div class="form-group">
													<input class="form-control form-control-sm" type="text" placeholder="Small input height">
												</div>
											</div>

											<div class="col-md-6">
												<div class="form-group">
													<select class="form-control form-control-lg">
					                                    <option value="opt1">Large select height</option>
					                                    <option value="opt2">Option 2</option>
					                                    <option value="opt3">Option 3</option>
					                                    <option value="opt4">Option 4</option>
					                                    <option value="opt5">Option 5</option>
					                                    <option value="opt6">Option 6</option>
					                                    <option value="opt7">Option 7</option>
					                                    <option value="opt8">Option 8</option>
					                                </select>
												</div>

												<div class="form-group">
													<select class="form-control">
					                                    <option value="opt1">Default select height</option>
					                                    <option value="opt2">Option 2</option>
					                                    <option value="opt3">Option 3</option>
					                                    <option value="opt4">Option 4</option>
					                                    <option value="opt5">Option 5</option>
					                                    <option value="opt6">Option 6</option>
					                                    <option value="opt7">Option 7</option>
					                                    <option value="opt8">Option 8</option>
					                                </select>
												</div>

												<div class="form-group">
													<select class="form-control form-control-sm">
					                                    <option value="opt1">Small select height</option>
					                                    <option value="opt2">Option 2</option>
					                                    <option value="opt3">Option 3</option>
					                                    <option value="opt4">Option 4</option>
					                                    <option value="opt5">Option 5</option>
					                                    <option value="opt6">Option 6</option>
					                                    <option value="opt7">Option 7</option>
					                                    <option value="opt8">Option 8</option>
					                                </select>
												</div>
											</div>
										</div>
									</div>
								</div>
							</fieldset>

							<fieldset class="mb-3">
								<legend class="text-uppercase font-size-sm font-weight-bold">Color options</legend>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Text color</label>
									<div class="col-lg-10">
										<input type="text" class="form-control text-violet" value="Custom text color">
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Border color</label>
									<div class="col-lg-10">
										<input type="text" class="form-control border-teal border-1" placeholder="Custom border color">
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Background color</label>
									<div class="col-lg-10">
										<input type="text" class="form-control bg-slate-600 border-slate-600 border-1" placeholder="Custom background color">
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Select color</label>
									<div class="col-lg-10">
										<select class="form-control bg-indigo-400 border-indigo-400">
		                                    <option value="opt1">Custom select color</option>
		                                    <option value="opt2">Option 2</option>
		                                    <option value="opt3">Option 3</option>
		                                    <option value="opt4">Option 4</option>
		                                    <option value="opt5">Option 5</option>
		                                    <option value="opt6">Option 6</option>
		                                    <option value="opt7">Option 7</option>
		                                    <option value="opt8">Option 8</option>
		                                </select>
									</div>
								</div>

		                        <div class="form-group row">
		                        	<label class="col-form-label col-lg-2">Styled select</label>
		                        	<div class="col-lg-10">
			                            <select class="form-control form-control-uniform-custom">
			                                <option value="opt1">Custom styled select color</option>
			                                <option value="opt2">Option 2</option>
			                                <option value="opt3">Option 3</option>
			                                <option value="opt4">Option 4</option>
			                                <option value="opt5">Option 5</option>
			                                <option value="opt6">Option 6</option>
			                                <option value="opt7">Option 7</option>
			                                <option value="opt8">Option 8</option>
			                            </select>
		                            </div>
		                        </div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">File input color</label>
									<div class="col-lg-10">
										<input type="file" class="form-control-uniform-custom">
									</div>
								</div>
							</fieldset>

							<fieldset class="mb-3">
								<legend class="text-uppercase font-size-sm font-weight-bold">Type options</legend>

								<div class="form-group row">
									<label class="col-form-label col-md-2">Datetime</label>
									<div class="col-md-10">
										<input class="form-control" type="datetime-local" name="datetime-local">
										<span class="form-text text-muted">Using <code>input type="datetime-local"</code></span>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-md-2">Date</label>
									<div class="col-md-10">
										<input class="form-control" type="date" name="date">
										<span class="form-text text-muted">Using <code>input type="date"</code></span>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-md-2">Month</label>
									<div class="col-md-10">
										<input class="form-control" type="month" name="month">
										<span class="form-text text-muted">Using <code>input type="month"</code></span>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-md-2">Time</label>
									<div class="col-md-10">
										<input class="form-control" type="time" name="time">
										<span class="form-text text-muted">Using <code>input type="time"</code></span>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-md-2">Week</label>
									<div class="col-md-10">
										<input class="form-control" type="week" name="week">
										<span class="form-text text-muted">Using <code>input type="week"</code></span>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-md-2">Number</label>
									<div class="col-md-10">
										<input class="form-control" type="number" name="number">
										<span class="form-text text-muted">Using <code>input type="number"</code></span>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-md-2">Email</label>
									<div class="col-md-10">
										<input class="form-control" type="email" name="email">
										<span class="form-text text-muted">Using <code>input type="email"</code></span>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-md-2">URL</label>
									<div class="col-md-10">
										<input class="form-control" type="url" name="url">
										<span class="form-text text-muted">Using <code>input type="url"</code></span>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-md-2">Search</label>
									<div class="col-md-10">
										<input class="form-control" type="search" name="search">
										<span class="form-text text-muted">Using <code>input type="search"</code></span>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-md-2">Tel</label>
									<div class="col-md-10">
										<input class="form-control" type="tel" name="tel">
										<span class="form-text text-muted">Using <code>input type="tel"</code></span>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-md-2">Color</label>
									<div class="col-md-10">
										<input class="form-control" type="color" name="color">
										<span class="form-text text-muted">Using <code>input type="color"</code></span>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-md-2">Range</label>
									<div class="col-md-10">
										<input class="form-control" type="range" name="range" min="0" max="10">
										<span class="form-text text-muted">Using <code>input type="range"</code></span>
									</div>
								</div>
							</fieldset>

							<div class="text-right">
								<button type="submit" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
							</div>
						</form>
					</div>
				</div>/-->
				<!-- /form inputs -->

				<!-- Option trees -->
				<!--
				<div class="mb-3">
					<h6 class="mb-0 font-weight-semibold">
						Option trees
					</h6>
					<span class="text-muted d-block">Dependent option trees</span>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Option tree field</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>
						
							<div class="card-body">
								<p class="mb-3">This example asks a user what number they would like on the sports jersey. They're always able to just type in a value. Here, we provide a sequence of dropdowns to let them select a sport, team and athlete. The jersey number is then automatically filled in.</p>
								<div id="alpaca-option-tree"></div>
								<a href="#alpaca-option-tree-source" data-toggle="collapse"><i class="icon-embed2 mr-2"></i> Show source code</a>
								<div class="collapse mt-2" id="alpaca-option-tree-source">
									<pre class="language-javascript"><code>// Option tree field
$('#alpaca-option-tree').alpaca({
    schema: {
        type: 'number',
        title: 'What number would like for your sports jersey?'
    },
    options: {
        type: 'optiontree',
        tree: {
            selectors: {
                sport: {
                    schema: {
                        type: 'string'
                    },
                    options: {
                        type: 'select',
                        noneLabel: 'Pick a Sport...'
                    }
                },
                team: {
                    schema: {
                        type: 'string'
                    },
                    options: {
                        type: 'select',
                        noneLabel: 'Pick a Team...'
                    }
                },
                player: {
                    schema: {
                        type: 'string'
                    },
                    options: {
                        type: 'select',
                        noneLabel: 'Pick a Player...'
                    }
                }
            },
            order: ['sport', 'team', 'player'],
            data: [{
                value: 23,
                attributes: {
                    sport: 'Basketball',
                    team: 'Chicago Bulls',
                    player: 'Michael Jordan'
                }
            }, {
                value: 33,
                attributes: {
                    sport: 'Basketball',
                    team: 'Chicago Bulls',
                    player: 'Scotty Pippen'
                }
            }, {
                value: 4,
                attributes: {
                    sport: 'Football',
                    team: 'Green Bay Packers',
                    player: 'Brett Favre'
                }
            }, {
                value: 19,
                attributes: {
                    sport: 'Baseball',
                    team: 'Milwaukee Brewers',
                    player: 'Robin Yount'
                }
            }, {
                value: 99,
                attributes: {
                    sport: 'Hockey',
                    player: 'Wayne Gretzky'
                }
            }],
            horizontal: true
        },
        focus: false
    }
});
</code></pre>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Using connector</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>
						
							<div class="card-body">
								<p class="mb-3">The following example produces the same form, but uses a connector to load the schema and options. The options JSON is loaded and merged with some inline options that provide to override a submit click handler.</p>
								<div id="alpaca-option-tree-connector"></div>
								<a href="#alpaca-option-tree-connector-source" data-toggle="collapse"><i class="icon-embed2 mr-2"></i> Show source code</a>
								<div class="collapse mt-2" id="alpaca-option-tree-connector-source">
									<pre class="language-javascript"><code>// Using connector
$('#alpaca-option-tree-connector').alpaca({
    schemaSource: 'global_assets/demo_data/alpaca/optiontree-custom-schema.json',
    optionsSource: 'global_assets/demo_data/alpaca/optiontree-custom-options.json',
    options: {
        focus: false
    }
});</code></pre>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /opton trees -->


				<!-- Full CKEditor -->
				<!--
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						CKEditor field
					</h6>
					<span class="text-muted d-block">Render CKEditor editor</span>
				</div>

				<div class="card mb-4">
					<div class="card-header header-elements-inline">
						<h6 class="card-title">Full featured editor</h6>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>
				
					<div class="card-body">
						<p class="mb-3">The <code>ckeditor</code> field. The CK Editor field renders the CK editor control that allows users to visually work with HTML and save the results back into a text property. This is a full example of the CK Editor at work. The point here is to show how it looks in full. In the examples that follow, we'll trim this down. Note - CKeditor must be included in your page ahead of the control loading in order for this to work properly.</p>

						<div id="alpaca-ckeditor-full"></div>
					</div>
				</div>
				<!-- /full CKEditor -->


				<!-- Input types -->
				<!--
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Input types
					</h6>
					<span class="text-muted d-block">Supported input types</span>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Lowercase</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>
						
							<div class="card-body">
								<p class="mb-3">The following example demonstrates how Alpaca library can format text inside input field. To apply <code>lowercase</code> text style, set <code>format</code> option to <code>lowercase</code> inside <code>schema</code> parameter.</p>
								<div id="alpaca-lowercase"></div>
								<a href="#alpaca-lowercase-source" data-toggle="collapse"><i class="icon-embed2 mr-2"></i> Show source code</a>
								<div class="collapse mt-2" id="alpaca-lowercase-source">
									<pre class="language-javascript"><code>// Lowercase
$('#alpaca-lowercase').alpaca({
    data: 'Ice cream is wonderful.',
    schema: {
        format: 'lowercase'
    },
    options: {
        focus: false
    }
});</code></pre>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Uppercase</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>
						
							<div class="card-body">
								<p class="mb-3">The following example demonstrates how Alpaca library can format text inside input field. To apply <code>uppercase</code> text style, set <code>format</code> option to <code>uppercase</code> inside <code>schema</code> parameter.</p>
								<div id="alpaca-uppercase"></div>
								<a href="#alpaca-uppercase-source" data-toggle="collapse"><i class="icon-embed2 mr-2"></i> Show source code</a>
								<div class="collapse mt-2" id="alpaca-uppercase-source">
									<pre class="language-javascript"><code>// Uppercase
$('#alpaca-uppercase').alpaca({
    data: 'Ice cream is wonderful.',
    schema: {
        format: 'uppercase'
    },
    options: {
        focus: false
    }
});</code></pre>
								</div>
							</div>
						</div>
					</div>
				</div>


				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Search type</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>
						
							<div class="card-body">
								<p class="mb-3">The <code>search</code> field implements a search box that provides a search-optimized control. It allows for the specification of search terms with an optimized user interface. It uses the HTML5 'search' input type, but not the actual search.</p>
								<div id="alpaca-search"></div>
								<a href="#alpaca-search-source" data-toggle="collapse"><i class="icon-embed2 mr-2"></i> Show source code</a>
								<div class="collapse mt-2" id="alpaca-search-source">
									<pre class="language-javascript"><code>// Search type
$('#alpaca-search').alpaca({
    data: 'Where for art thou Romeo?',
    schema: {
        type: 'string'
    },
    options: {
        type: 'search',
        focus: false,
        label: 'Search'
    }
});</code></pre>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Integer type</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>
						
							<div class="card-body">
								<p class="mb-3">The following example demonstrates <code>integer</code> field with data, options and schema parameters. Minimum value is set to 18, maximum to 25. Validation is also enabled, try to change input value to see it in action.</p>
								<div id="alpaca-integer"></div>
								<a href="#alpaca-integer-source" data-toggle="collapse"><i class="icon-embed2 mr-2"></i> Show source code</a>
								<div class="collapse mt-2" id="alpaca-integer-source">
									<pre class="language-javascript"><code>// Integer type
$('#alpaca-integer').alpaca({
    data: 20,
    options: {
        type: 'integer',
        label: 'Age:',
        focus: false
    },
    schema: {
        minimum: 18,
        maximum: 25,
        exclusiveMinimum: true,
        exclusiveMaximum: true,
        divisibleBy: 2
    }
});</code></pre>
								</div>
							</div>
						</div>
					</div>
				</div>


				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Password type</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>
						
							<div class="card-body">
								<p class="mb-3">The following example demonstrates <code>password</code> field type. Here input doesn't have any optional parameters, but a very basic setup. This input field type supports all available options and parameters.</p>
								<div id="alpaca-password"></div>
								<a href="#alpaca-password-source" data-toggle="collapse"><i class="icon-embed2 mr-2"></i> Show source code</a>
								<div class="collapse mt-2" id="alpaca-password-source">
									<pre class="language-javascript"><code>// Password type
$('#alpaca-password').alpaca({
    data: 'password',
    schema: {
        format: 'password'
    },
    options: {
        focus: false
    }
});</code></pre>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Email type</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>
						
							<div class="card-body">
								<p class="mb-3">The following example demonstrates <code>email</code> field type. Here input doesn't have any optional parameters, but a very basic setup. This input field type supports all available options and parameters. Validation enabled by default.</p>
								<div id="alpaca-email"></div>
								<a href="#alpaca-email-source" data-toggle="collapse"><i class="icon-embed2 mr-2"></i> Show source code</a>
								<div class="collapse mt-2" id="alpaca-email-source">
									<pre class="language-javascript"><code>// Email type
$('#alpaca-email').alpaca({
    data: 'support',
    schema: {
        format: 'email'
    },
    options: {
        focus: false
    }
});</code></pre>
								</div>
							</div>
						</div>
					</div>
				</div>


				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">IPv4 type</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>
						
							<div class="card-body">
								<p class="mb-3">The following example demonstrates <code>ipv4</code> field type. Here input doesn't have any optional parameters, but a very basic setup. This input field type supports all available options and parameters. Validation enabled by default.</p>
								<div id="alpaca-ipv4"></div>
								<a href="#alpaca-ipv4-source" data-toggle="collapse"><i class="icon-embed2 mr-2"></i> Show source code</a>
								<div class="collapse mt-2" id="alpaca-ipv4-source">
									<pre class="language-javascript"><code>// IP address type
$('#alpaca-ipv4').alpaca({
    data: '100.60',
    schema: {
        format: 'ip-address'
    },
    options: {
        focus: false
    }
});</code></pre>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">URL type</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>
						
							<div class="card-body">
								<p class="mb-3">The following example demonstrates <code>url</code> field type. Here input doesn't have any optional parameters, but a very basic setup. This input field type supports all available options and parameters. Validation enabled by default.</p>
								<div id="alpaca-url"></div>
								<a href="#alpaca-url-source" data-toggle="collapse"><i class="icon-embed2 mr-2"></i> Show source code</a>
								<div class="collapse mt-2" id="alpaca-url-source">
									<pre class="language-javascript"><code>// URL type
$('#alpaca-url').alpaca({
    data: 'http://www.alpacajs.org',
    options: {
        type: 'url',
        focus: false
    },
    schema: {
        format: 'uri'
    }
});</code></pre>
								</div>
							</div>
						</div>
					</div>
				</div>


				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Currency type</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>
						
							<div class="card-body">
								<p class="mb-3">The following example demonstrates <code>currency</code> field type. Here input doesn't have any optional parameters, but a very basic setup. The currency field uses the JQuery Price Format plugin to render format the input as it's entered.</p>
								<div id="alpaca-currency"></div>
								<a href="#alpaca-currency-source" data-toggle="collapse"><i class="icon-embed2 mr-2"></i> Show source code</a>
								<div class="collapse mt-2" id="alpaca-currency-source">
									<pre class="language-javascript"><code>// Currency type
$('#alpaca-currency').alpaca({
    options: {
        type: 'currency',
        focus: false
    }
});</code></pre>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Personal name type</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>
						
							<div class="card-body">
								<p class="mb-3">The following example demonstrates custom <code>personal name</code> field type. Every time you press space key, new word starts with capital letter. This input field type supports all available options and parameters. Validation enabled by default.</p>
								<div id="alpaca-name"></div>
								<a href="#alpaca-name-source" data-toggle="collapse"><i class="icon-embed2 mr-2"></i> Show source code</a>
								<div class="collapse mt-2" id="alpaca-name-source">
									<pre class="language-javascript"><code>// Personal name type
$('#alpaca-name').alpaca({
    data: 'Oscar Zoroaster Phadrig Isaac Norman Henkel Emmannuel Ambroise Diggs',
    options: {
        type: 'personalname',
        focus: false
    }
});</code></pre>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /input types -->



				<!-- File inputs -->
				<!--
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						File inputs
					</h6>
					<span class="text-muted d-block">Default and optional styling</span>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Basic file input</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>
						
							<div class="card-body">
								<p class="mb-3">The following example demonstrates a basic single file input. This input field type supports all available options and parameters. Additionally you can specify schema format. Validation is disabled by default.</p>
								<div id="alpaca-file"></div>
								<a href="#alpaca-file-source" data-toggle="collapse"><i class="icon-embed2 mr-2"></i> Show source code</a>
								<div class="collapse mt-2" id="alpaca-file-source">
									<pre class="language-javascript"><code>// Basic file input
$('#alpaca-file').alpaca({
    data: '',
    options: {
        type: 'file',
        label: 'Ice Cream Photo:',
        helper: 'Pick your favorite ice cream picture.',
        focus: false
    },
    schema: {
        type: 'string',
        format: 'uri'
    }
});</code></pre>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Static mode</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>
						
							<div class="card-body">
								<p class="mb-3">The following example demonstrates a basic single file input in <code>read only</code> mode. This input field type supports all available options and parameters. Additionally you can specify schema format. Validation is disabled by default.</p>
								<div id="alpaca-file-static"></div>
								<a href="#alpaca-file-static-source" data-toggle="collapse"><i class="icon-embed2 mr-2"></i> Show source code</a>
								<div class="collapse mt-2" id="alpaca-file-static-source">
									<pre class="language-javascript"><code>// Static mode
$('#alpaca-file-static').alpaca({
    data: '/abc.html',
    options: {
        type: 'file',
        label: 'Ice Cream Photo:',
        helper: 'Pick your favorite ice cream picture.',
        focus: false
    },
    schema: {
        type: 'string',
        format: 'uri'
    },
    view: 'bootstrap-display'
});</code></pre>
								</div>
							</div>
						</div>
					</div>
				</div>


				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Styled file input</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>
						
							<div class="card-body">
								<p class="mb-3">The following example demonstrates a single file input styled with <code>uniform</code> plugin. This is optional configuration, Alpaca doesn't support it by default and doesn't have custom field type. Also supports all available options.</p>
								<div id="alpaca-file-styled"></div>
								<a href="#alpaca-file-styled-source" data-toggle="collapse"><i class="icon-embed2 mr-2"></i> Show source code</a>
								<div class="collapse mt-2" id="alpaca-file-styled-source">
									<pre class="language-javascript"><code>// Styled file input
$('#alpaca-file-styled').alpaca({
    data: '',
    options: {
        type: 'file',
        label: 'Ice Cream Photo:',
        helper: 'Pick your favorite ice cream picture.',
        id: 'file-styled',
        focus: false
    },
    schema: {
        type: 'string',
        format: 'uri'
    },
    postRender: function() {
        $('#file-styled').uniform({
            fileButtonClass: 'action btn bg-blue'
        });
    }
});</code></pre>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Disabled file input</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>
						
							<div class="card-body">
								<p class="mb-3">The following example demonstrates a single file input styled with <code>uniform</code> plugin in <code>disabled</code> mode. This is optional configuration, Alpaca doesn't support it by default and doesn't have custom field type. Also supports all available options.</p>
								<div id="alpaca-file-disabled"></div>
								<a href="#alpaca-file-disabled-source" data-toggle="collapse"><i class="icon-embed2 mr-2"></i> Show source code</a>
								<div class="collapse mt-2" id="alpaca-file-disabled-source">
									<pre class="language-javascript"><code>// Disabled file input
$('#alpaca-file-disabled').alpaca({
    data: '',
    options: {
        type: 'file',
        label: 'Ice Cream Photo:',
        helper: 'Pick your favorite ice cream picture.',
        disabled: true,
        id: 'file-styled-disabled',
        focus: false
    },
    schema: {
        type: 'string',
        format: 'uri'
    },
    postRender: function() {
        $('#file-styled-disabled').uniform({
            fileButtonClass: 'action btn bg-blue'
        });
    }
});</code></pre>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /file inputs -->



				<!-- Select helpers -->
				<!--
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Select helpers
					</h6>
					<span class="text-muted d-block">Country and state selects</span>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Country selector</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>
						
							<div class="card-body">
								<p class="mb-3">The following example demonstrates <code>country</code> field with default settings. To use this kind of select helper, just set <code>type</code> option to <code>country</code> in your configuration. Supports all available options.</p>
								<div id="alpaca-country"></div>
								<a href="#alpaca-country-source" data-toggle="collapse"><i class="icon-embed2 mr-2"></i> Show source code</a>
								<div class="collapse mt-2" id="alpaca-country-source">
									<pre class="language-javascript"><code>// Country selector
$('#alpaca-country').alpaca({
    options: {
        type: 'country',
        focus: false
    }
});</code></pre>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">State selector</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>
						
							<div class="card-body">
								<p class="mb-3">The following example demonstrates <code>state</code> field with default settings. To use this kind of select helper, just set <code>type</code> option to <code>state</code> in your configuration. Supports all available options.</p>
								<div id="alpaca-state"></div>
								<a href="#alpaca-state-source" data-toggle="collapse"><i class="icon-embed2 mr-2"></i> Show source code</a>
								<div class="collapse mt-2" id="alpaca-state-source">
									<pre class="language-javascript"><code>// State selector
$('#alpaca-state').alpaca({
    options: {
        type: 'state',
        focus: false
    }
});</code></pre>
								</div>
							</div>
						</div>
					</div>
				</div>


				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Searchable select</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>
						
							<div class="card-body">
								<p class="mb-3">The following example demonstrates <code>country</code> field with integrated Select2 plugin. To initialize Select2 on select, you need to add init code in <code>postRender</code> callback. Supports all available options.</p>
								<div id="alpaca-country-search"></div>
								<a href="#alpaca-country-search-source" data-toggle="collapse"><i class="icon-embed2 mr-2"></i> Show source code</a>
								<div class="collapse mt-2" id="alpaca-country-search-source">
									<pre class="language-javascript"><code>// Searchable country selector
$('#alpaca-country-search').alpaca({
    options: {
        type: 'country',
        id: 'country-search',
        focus: false
    },
    postRender: function() {
        $('#country-search').select2();
    }
});</code></pre>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Searchable select</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>
						
							<div class="card-body">
								<p class="mb-3">The following example demonstrates <code>state</code> field with integrated Select2 plugin. To initialize Select2 on select, you need to add init code in <code>postRender</code> callback. Supports all available options.</p>
								<div id="alpaca-state-search"></div>
								<a href="#alpaca-state-search-source" data-toggle="collapse"><i class="icon-embed2 mr-2"></i> Show source code</a>
								<div class="collapse mt-2" id="alpaca-state-search-source">
									<pre class="language-javascript"><code>// Searchable state selector
$('#alpaca-state-search').alpaca({
    options: {
        type: 'state',
        id: 'state-search',
        focus: false
    },
    postRender: function() {
        $('#state-search').select2();
    }
});</code></pre>
								</div>
							</div>
						</div>
					</div>
				</div>/-->
				<!-- /select helpers -->

			</div>
			<!-- /content area -->


			<!-- Footer -->
			<div class="navbar navbar-expand-lg navbar-light">
				<div class="text-center d-lg-none w-100">
					<button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
						<i class="icon-unfold mr-2"></i>
						Footer
					</button>
				</div>

				<div class="navbar-collapse collapse" id="navbar-footer">
					<span class="navbar-text">
						&copy; 2015 - 2018. <a href="#">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
					</span>

					<ul class="navbar-nav ml-lg-auto">
						<li class="nav-item"><a href="https://kopyov.ticksy.com/" class="navbar-nav-link" target="_blank"><i class="icon-lifebuoy mr-2"></i> Support</a></li>
						<li class="nav-item"><a href="http://demo.interface.club/limitless/docs/" class="navbar-nav-link" target="_blank"><i class="icon-file-text2 mr-2"></i> Docs</a></li>
						<li class="nav-item"><a href="https://themeforest.net/item/limitless-responsive-web-application-kit/13080328?ref=kopyov" class="navbar-nav-link font-weight-semibold"><span class="text-pink-400"><i class="icon-cart2 mr-2"></i> Purchase</span></a></li>
					</ul>
				</div>
			</div>
			<!-- /footer -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->

</body>
</html>
