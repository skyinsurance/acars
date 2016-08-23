<style>
.skin-blue .sidebar-menu>li:hover>a, .skin-blue .sidebar-menu>li.active>a
{
	border-left-color: #1E282C !important;
}
</style>

<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
       <!-- <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>-->

        <!-- search form -->
      <!--  <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>-->
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
                 
        		
                  ['label' => 'Dashboard',
        		       'icon' => 'fa fa-tachometer', 
        		        'url' => ['/admin'],
        		
			        		         ],

		        		['label' => 'Manage Clients',
		        		'icon' => 'fa fa-users',
		        		'url' => ['/admin/clients'],
		        		],
        		
        		
						['label' => 'Manage Companies',
        		      	 'icon' => 'fa fa-industry', 
        		         'url' => ['/admin/company'],
        		 		 ],
							
        		['label' => 'Manage Users',
        		'icon' => 'fa fa-users',
        		'url' => ['/admin/users'],
        		 
        		],
        		
        	    ['label' => 'Master Data',
		        		'icon' => 'fa fa-file-code-o',
		        		'url' => ['#'],
		        		'items' => [
		        		['label' => 'Manage Brands ', 'icon' => 'fa fa-angle-double-right', 'url' => ['/admin/masterdata'],],
		        		['label' => 'Lookup Options', 'icon' => 'fa fa-angle-double-right', 'url' => ['/admin/masterdata/lookupoptions'],],
        		        ['label' => 'Account Settings', 'icon' => 'fa fa-angle-double-right', 'url' => ['/admin/masterdata/accountsettings'],],
                         	['label' => 'Element Master', 'icon' => 'fa fa-angle-double-right', 'url' => ['/admin/masterdata/elements'],], 						
					        		],
			  	],
        		
        		['label' => 'Reports',
        		'icon' => 'fa fa-file',
        		'url' => ['/admin/report'],
        		 
        		],
				['label' => 'View Transactions',
        		'icon' => 'fa fa-money',
        		'url' => ['/admin/transaction'],
        		],
				
				/*['label' => 'Help',
        		'icon' => 'fa fa-wpforms',
        		'url' => ['/admin/settings/options'],
        		],
				
				['label' => 'Logout',
        		'icon' => 'fa fa-sign-out',
        		'url' => ['/login'],
        		],*/

        		
        		
		        		//['label' => 'Facilities',
		        		//'icon' => 'fa fa-file-code-o',
		        		//'url' => ['/gii'],
		        		//'items' => [
		        		//['label' => 'Facilities ', 'icon' => 'fa fa-file-code-o', 'url' => ['/gii'],],
		        		//['label' => 'New Facilities', 'icon' => 'fa fa-dashboard', 'url' => ['/debug'],],
					   //     		],
			        	//	],
		        		
        		
		        		//['label' => 'Members',
		        		//'icon' => 'fa fa-file-code-o',
		        		//'url' => ['/gii'],
		        		//'items' => [
		        		//['label' => 'All Members ', 'icon' => 'fa fa-file-code-o', 'url' => ['/gii'],],
		        		//['label' => 'Account Members', 'icon' => 'fa fa-dashboard', 'url' => ['/debug'],],
						//['label' => 'Faculty Members', 'icon' => 'fa fa-dashboard', 'url' => ['/debug'],],
									      //		],
							       	//	],
		        		
        		
		        	//	['label' => 'Merchandise',
		        	//	'icon' => 'fa fa-file-code-o',
		        	//	'url' => ['/gii'],
		        	//	'items' => [
		        	//	['label' => 'Orders ', 'icon' => 'fa fa-file-code-o', 'url' => ['/gii'],],
		        	//                         ],
				      //  	              	],
        		
        		
		        	//	['label' => 'Products',
		        	//	'icon' => 'fa fa-file-code-o',
		        	//	'url' => ['/gii'],
		        	//	'items' => [
		        	//	['label' => 'Plans ', 'icon' => 'fa fa-file-code-o', 'url' => ['/gii'],],
		        	//	['label' => 'Plans Addons', 'icon' => 'fa fa-dashboard', 'url' => ['/debug'],],
						       // 		],
				        	//	],
        		
		        		
                 
                  //  [
                       // 'label' => 'User Directory',
                    //    'icon' => 'fa fa-share',
                   //     'url' => '#',
                     //   'items' => [
					//			[
							//	        'label' => 'Access Control',
							//	        'icon' => 'fa fa-circle-o',
							  //      	'url' => '#',
							   //      	'items' => [
							//							['label' => 'Api-Keys', 'icon' => 'fa fa-circle-o', 'url' => '#',],
													//	['label' => 'Groups', 'icon' => 'fa fa-circle-o', 'url' => '#',],
													//	['label' => 'Users', 'icon' => 'fa fa-circle-o', 'url' => '#',],
							                                 //	],
						 	                        //	],
			                        //    ['label' => 'People', 'icon' => 'fa fa-file-code-o', 'url' => ['/gii'],],
			                        //    ['label' => 'Teams', 'icon' => 'fa fa-dashboard', 'url' => ['/debug'],],
                       // ],
                  //  ],



					
					//[       'label' => 'Systems',
						//	'icon' => 'fa fa-file-code-o',
						//	'url' => ['/gii'],
						//	'items' => [
					//['label' => 'Regions ', 'icon' => 'fa fa-file-code-o', 'url' => ['/gii'],],
				//	['label' => 'Locations', 'icon' => 'fa fa-dashboard', 'url' => ['/debug'],],
				//	['label' => 'System Logs', 'icon' => 'fa fa-dashboard', 'url' => ['/debug'],],
						//		],
					//	],
                
				
				
				
				
				],
            ]
        ) ?>

    </section>

</aside>
