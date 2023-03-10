@php
    $categories = App\Models\Category::orderBy('category_name_en','ASC') -> get();

@endphp

<!-- ================================== TOP NAVIGATION ================================== -->
<div class="side-menu animate-dropdown outer-bottom-xs">
    <div class="head"><i class="icon fa fa-align-justify fa-fw"></i>
@if(session()->get('language') == 'urdu') {{ 'اقسام' }} @else {{ 'CATEGORIES' }} @endif
    
    </div>
    <nav class="yamm megamenu-horizontal">
      <ul class="nav">

        @foreach ($categories as $category)
        <li class="dropdown menu-item"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon {{ $category -> category_icon }}" aria-hidden="true"></i>
          @if(session() -> get('language') == 'urdu') {{ $category -> category_name_ur }} @else {{ $category -> category_name_en }} @endif
          </a>
          <ul class="dropdown-menu mega-menu">
            <li class="yamm-content">
              <div class="row">
                @php
                $subcategories = App\Models\SubCategory::where('category_id', $category -> id) -> orderBy('subcategory_name_en','ASC') -> get();
                @endphp
                
                @foreach ($subcategories as $subcategory)
                <div class="col-sm-12 col-md-3">
                    <a href="{{ url('subcategory/product/'.$subcategory -> id.'/'.$subcategory -> subcategory_slug_en) }}">
                        <h2 class="title">
                            @if(session() -> get('language') == 'urdu') {{ $subcategory -> subcategory_name_ur }} @else {{ $subcategory -> subcategory_name_en }} @endif
                        </h2>
                    </a>
                  @php
                  $childcategories = App\Models\ChildCategory::where('subcategory_id', $subcategory -> id) -> orderBy('childcategory_name_en','ASC') -> get();
                  @endphp

                  @foreach ($childcategories as $childcategory)
                  <ul class="links list-unstyled">
                    <li><a href="{{ url('childcategory/product/'.$childcategory->id.'/'.$childcategory->childcategory_slug_en ) }}">
                      @if(session() -> get('language') == 'urdu') {{ $childcategory -> childcategory_name_ur }} @else {{ $childcategory -> childcategory_name_en }} @endif
                    </a></li>
                  </ul>
                  @endforeach
                </div>
                @endforeach
              <!-- /.row --> 
            </li>
            <!-- /.yamm-content -->
          </ul>
          <!-- /.dropdown-menu --> </li>
        <!-- /.menu-item -->
        @endforeach
        
        

      
      </ul>
      <!-- /.nav --> 
    </nav>
    <!-- /.megamenu-horizontal --> 
  </div>
  <!-- /.side-menu --> 
  <!-- ================================== TOP NAVIGATION : END ================================== --> 
  