<header class="eltdf-page-header">
	<div class="eltdf-menu-area">		
		<div class="eltdf-vertical-align-containers">
			<div class="eltdf-position-left">
				<div class="eltdf-position-left-inner">
                    <div class="eltdf-logo-wrapper">
                        <a itemprop="url" href="<?php echo e(route('/')); ?>" style="height: 63px;">
                            <img itemprop="image" class="eltdf-normal-logo" src="#"  alt="logo"/>
                            <img itemprop="image" class="eltdf-dark-logo" src="#"  alt="dark logo"/>
                            <img itemprop="image" class="eltdf-light-logo" src="<?php echo e(asset('design')); ?>/img/logo.png" width="364" height="126"  alt="light logo"/></a>
                    </div>
				</div>
			</div>
            <div class="eltdf-position-center">
	            <div class="eltdf-position-center-inner">			
                    <nav class="eltdf-main-menu eltdf-drop-down eltdf-default-nav">
                        <ul id="menu-main-menu" class="clearfix">
                            <li id="nav-menu-item-15" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children eltdf-active-item has_sub narrow">
                                <a href="<?php echo e(route('/')); ?>" class=" current "><span class="item_outer"><span class="item_text">Home</span><i class="eltdf-menu-arrow fa fa-angle-down"></i></span></a>
                            </li>
                            <li id="nav-menu-item-16" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub narrow">
                                <a href="<?php echo e(route('jobs')); ?>" class=""><span class="item_outer"><span class="item_text">Jobs</span><i class="eltdf-menu-arrow fa fa-angle-down"></i></span></a>
                            </li>
                            <li id="nav-menu-item-17" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub wide">
                                <a 
                                <?php if(auth()->guard()->guest()): ?>
                                 href="#" class="" data-toggle="modal" data-target="#postjob"
                                 <?php else: ?>
                                 <?php if(Auth::user()->hasRole('Job Seeker')): ?> 
                                    
                                    href="<?php echo e(route('job-seeker-dashboard')); ?>"
                                <?php elseif(Auth::user()->hasRole('Employer Seeker')): ?>
                          
                                href="<?php echo e(route('company-dashboard')); ?>" 
                                <?php elseif(Auth::user()->hasRole('Admin')): ?>
                                href="<?php echo e(route('company-dashboard')); ?>"
                                     
                                <?php endif; ?>
                           
                                 <?php endif; ?>
                                 ><span class="item_outer"><span class="item_text">Post Jobs</span><i class="eltdf-menu-arrow fa fa-angle-down"></i></span></a>
                            </li>
                        </ul>
                    </nav>
				</div>
			</div>
            <div class="eltdf-position-right">
                <nav class="eltdf-main-menu eltdf-drop-down eltdf-default-nav">
                    <ul>
                        <?php if(auth()->guard()->guest()): ?>
                        <li id="nav-menu-item-21" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub narrow">
                            <a href="<?php echo e(route('dashboard')); ?>" class=""><span class="item_outer"><span class="item_text">Login / Register</span><i class="eltdf-menu-arrow fa fa-angle-down"></i></span></a>
                        </li>                        
                    <?php endif; ?>
                    <?php if(auth()->guard()->check()): ?>
                    <li id="nav-menu-item-21" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub narrow">
                            <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();" class=""><span class="item_outer"><span class="item_text">Logout</span><i class="eltdf-menu-arrow fa fa-angle-down"></i></span></a>
                    </li>   
  
                    <?php endif; ?>
                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                            <?php echo csrf_field(); ?>
                            </form>
                    </ul>
                </nav>
            </div>
		</div>
    </div>		
    <div class="eltdf-sticky-header">
        <div class="eltdf-sticky-holder">
            <div class=" eltdf-vertical-align-containers">
                <div class="eltdf-position-left">
                    <div class="eltdf-position-left-inner">
                        <div class="eltdf-logo-wrapper">
                            <a itemprop="url" href="#" style="height: 63px;">
                                <img itemprop="image" class="eltdf-normal-logo" src="<?php echo e(asset('design')); ?>/img/logo.png"  alt="logo"/>
                                <img itemprop="image" class="eltdf-dark-logo" src="#"  alt="dark logo"/>        <img itemprop="image" class="eltdf-light-logo" src="#" width="364" height="126"  alt="light logo"/></a>
                        </div>
                    </div>
                </div>
                <div class="eltdf-position-center">
                    <div class="eltdf-position-center-inner">                 
                        <nav class="eltdf-main-menu eltdf-drop-down eltdf-sticky-nav">
                            <ul id="menu-main-menu-1" class="clearfix">
                                <li id="sticky-nav-menu-item-15" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children eltdf-active-item has_sub narrow">
                                    <a href="<?php echo e(route('/')); ?>" class=" current "><span class="item_outer"><span class="item_text">Home</span><span class="plus"></span><i class="eltdf-menu-arrow fa fa-angle-down"></i></span></a>
                                </li>
                                <li id="sticky-nav-menu-item-16" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub narrow">
                                    <a href="<?php echo e(route('jobs')); ?>" class=""><span class="item_outer"><span class="item_text">Jobs</span><span class="plus"></span><i class="eltdf-menu-arrow fa fa-angle-down"></i></span></a>
                                </li>
                                <li id="sticky-nav-menu-item-19" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub narrow">
                                    <a
                                    <?php if(auth()->guard()->guest()): ?>
                                    href="#" class="" data-toggle="modal" data-target="#postjob"
                                    <?php else: ?>
                                    <?php if(Auth::user()->hasRole('Job Seeker')): ?> 
                                       
                                       href="<?php echo e(route('job-seeker-dashboard')); ?>"
                                   <?php elseif(Auth::user()->hasRole('Employer Seeker')): ?>
                             
                                   href="<?php echo e(route('company-dashboard')); ?>" 
                                   <?php elseif(Auth::user()->hasRole('Admin')): ?>
                                   href="<?php echo e(route('company-dashboard')); ?>"
                                        
                                   <?php endif; ?>
                              
                                    <?php endif; ?>
                                     
                                     ><span class="item_outer"><span class="item_text">Post Job</span><span class="plus"></span><i class="eltdf-menu-arrow fa fa-angle-down"></i></span></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <div class="eltdf-position-right">
                    <div class="eltdf-position-right-inner">         
                        <a class="eltdf-search-opener eltdf-icon-has-hover" href="javascript:void(0)">
                            <span class="eltdf-search-opener-wrapper">
                                
                            </span>
                	    </a>
                    	<a class="eltdf-side-menu-button-opener eltdf-icon-has-hover"  href="javascript:void(0)" >
            			<span class="eltdf-side-menu-lines">
                        	<span class="eltdf-side-menu-line eltdf-line-1"></span>
                        	<span class="eltdf-side-menu-line eltdf-line-2"></span>
                            <span class="eltdf-side-menu-line eltdf-line-3"></span>
                    	</span>
                		</a>
                	</div>
                </div>
                
            <div class="eltdf-position-right">
                <nav class="eltdf-main-menu eltdf-drop-down eltdf-default-nav">
                    <ul>
                        <?php if(auth()->guard()->guest()): ?>
                            <li id="nav-menu-item-21" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub narrow">
                                <a href="<?php echo e(route('dashboard')); ?>" class=""><span class="item_outer"><span class="item_text">Login / Register</span><i class="eltdf-menu-arrow fa fa-angle-down"></i></span></a>
                            </li>                        
                        <?php endif; ?>
                        <?php if(auth()->guard()->check()): ?>
                        <li id="nav-menu-item-21" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub narrow">
                                <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();" class=""><span class="item_outer"><span class="item_text">Logout</span><i class="eltdf-menu-arrow fa fa-angle-down"></i></span></a>
                        </li>   
      
                        <?php endif; ?>
                    </ul>
                </nav>
            </div>
            </div>
        </div>
	</div>
</header>