                            @if ($subcategory->subcategories)

                              @foreach ($subcategory->subcategories as $subcategory)
                                
                              
                                <tr>
                                <td>--</td>
                                <td>{{$subcategory->title}}</td>
                                <td>{{$subcategory->title_slug}}</td>
                                <td>
                                  <a class="" href="{{route('category.edit',$subcategory->id)}}"> <i class="lni lni-pencil"></i></a>
                                  <a class="" href="{{route('category.delete',$subcategory->id)}}"> <i class="lni lni-trash-can"></i></a>
                                  </td>
                                
                                 </tr>

                                 @include('layouts.components.CategoryComponent')
                              @endforeach
                            @endif