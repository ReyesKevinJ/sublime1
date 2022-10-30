<x-app-layout>
<div class="flex items-center justify-center min-h-screen p-5 ">
            <div class="w-3/5 bg-white shadow-lg">
                <div class="flex justify-between p-4">
                    <div>
                        <h1 class="text-3xl italic font-extrabold tracking-widest text-indigo-500">Fire Sublime</h1>
                        <p class="text-base">Si puedes soñarlo puedes personalizarlo.</p>
                    </div>
                    <div class="p-2">
                        <ul class="flex">
                            <li class="flex flex-col items-center p-2 border-l-2 border-indigo-200">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-600" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                                </svg>
                                <span class="text-sm">
                                    www.sublimefire.com
                                </span>
                                
                            </li>
                            <li class="flex flex-col p-2 border-l-2 border-indigo-200">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-600" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <span class="text-sm">
                                    Argentina Corrientes Capital
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="w-full h-0.5 bg-indigo-500"></div>
                <div class="flex justify-between p-4">
                    <div>
                        <h6 class="font-bold">Fecha del pedido: <span class="text-sm font-medium"> {{$pedido->created_at}}</span></h6>
                        <h6 class="font-bold">id pedido : <span class="text-sm font-medium"> {{$pedido->id}}</span></h6>
                    </div>
                    <div class="w-40">
                        <address class="text-sm">
                            <span class="font-bold"> contactanos : </span>
                            <br> +54 9 3795 30-4059
                        </address>
                    </div>
                 
                    <div></div>
                </div>
                <div class="flex justify-center p-4">
                    <div class="border-b border-gray-200 shadow">
                        <table class="">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-4 py-2 text-xs text-gray-500 ">
                                        ID Producto
                                    </th>
                                    <th class="px-4 py-2 text-xs text-gray-500 ">
                                        Nombre producto
                                    </th>
                                    <th class="px-4 py-2 text-xs text-gray-500 ">
                                        cantidad
                                    </th>
                                    <th class="px-4 py-2 text-xs text-gray-500 ">
                                        Precio C/U
                                    </th>
                                    <th class="px-4 py-2 text-xs text-gray-500 ">
                                        SubTotal
                                    </th>
                                    
                                </tr>
                            </thead>
                            <tbody class="bg-white">
                            <?php $total2=0; ?>
                            @foreach ($pedido->lineapedidos as $lineapedido)
                                <tr class="whitespace-nowrap">
                                    <td class="px-6 py-4 text-sm text-gray-500">
                                            <p>{{$lineapedido->producto->id}}</p>
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-500">
                                            <p>{{$lineapedido->producto->nombre}}</p>
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-500">
                                            <p>{{$lineapedido->cantidad}}</p>
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-500">
                                            <p>{{$lineapedido->producto->precio}}</p>
                                    </td>
                                    <td>                                    
                                        $<?php 
                                        
                                        $total=$lineapedido->cantidad*$lineapedido->producto->precio;
                                            echo $total;
                                          $total2 = $total2 + $total;
                                            
                                            ?>
                                           
                                    </td>
                                </tr>
                            @endforeach
                            
                                
                                <tr class="text-white bg-gray-800">
                                    <th colspan="3"></th>
                                    <td class="text-sm font-bold"><b>Total</b></td>
                                    <td class="text-sm font-bold"><b><?php echo "$$total2" ?></b></td>
                              
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <div class="w-full h-0.5 bg-indigo-500"></div>
             
                <div class="p-4">
                    <div class="flex items-center justify-center">
                        Gracias por elegirnos.
                    </div>
                  
                </div>

            </div>
        </div>
      
</x-app-layout>