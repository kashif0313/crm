
 <div class="flex space-x-2 flex-wrap w-full">
   <div class="flex flex-col">
    <div class="flex space-x-2 mb-4">
      <a href="/users" class="block min-w-48 p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 justify-center text-center">

   <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">{{count($user)}}</h5>
   <p class="font-normal text-gray-700 ">Total Users</p>

   </a>
   <a href="/roles" class="block min-w-48 p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 justify-center text-center">

      <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">{{count($role)}}</h5>
      <p class="font-normal text-gray-700 ">Total Roles</p>
      </a>
   </div>

   <div class="max-w-sm w-full bg-white rounded-lg shadow  p-4 md:p-6">
    <div class="flex justify-between">
      <div wire:poll.15s.keep-alive="newUsersRandom">
        <h5 class="leading-none text-3xl font-bold text-gray-900  pb-2">{{$usersNumber}}k</h5>
        <p class="text-base font-normal text-gray-500 ">Users this week</p>
      </div>
      @if ($usersNumber > 4)
          <div
          class="flex items-center px-2.5 py-0.5 text-base font-semibold text-green-500  text-center">
          {{$percentUsers}}%
          <svg class="w-3 h-3 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 14">
             <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13V1m0 0L1 5m4-4 4 4"/>
          </svg>
          </div>
      @else
          <div
          class="flex items-center px-2.5 py-0.5 text-base font-semibold text-red-500  text-center">
          {{$percentUsers}}%
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
             <path fill-rule="evenodd" d="M12 2.25a.75.75 0 0 1 .75.75v16.19l6.22-6.22a.75.75 0 1 1 1.06 1.06l-7.5 7.5a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 1 1 1.06-1.06l6.22 6.22V3a.75.75 0 0 1 .75-.75Z" clip-rule="evenodd" />
           </svg>
           
          </div>
      @endif
      
    </div>
    
    <div class="grid grid-cols-1 items-center border-gray-200 border-t  justify-between">
      <div class="flex justify-between items-center pt-5">
  <!-- Dropdown menu -->
  <x-selectDropdown liveFunction="filterDates" defaultSelectd="Last 7 Days" defaultSelectdValue="Last 7 Days" >
    <option value="today">Today</option>
    <option value="yesterday">Yesterday</option>
    <option value="30">Last 30 Days</option>
    <option value="90">Last 90 Days</option>
 </x-selectDropdown>
        <a
          href="#"
          class="uppercase text-sm font-semibold inline-flex items-center rounded-lg text-blue-600 hover:text-blue-700   hover:bg-gray-100  px-3 py-2">
          Users Report
          <svg class="w-2.5 h-2.5 ms-1.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
          </svg>
        </a>
      </div>
    </div>
 
   
  </div>
   </div>
   
   
  
   <div  class="max-w-sm sm:w-full bg-white rounded-lg shadow  p-4 md:p-6">
    <div id="container" style="width:100%; height:400px;" wire:ignore ></div>
    {{-- <canvas id="userChart"  height='800px' width='800px'></canvas> --}}
  </div>
    <div class="max-w-sm sm:w-full bg-white rounded-lg shadow  p-4 md:p-6">
      <div id="container1" style="width:100%; height:400px;" wire:ignore></div>
    {{-- <canvas id="roleChart"  height='800px' width='800px'></canvas> --}}
  </div>


<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
 <script>
  // var ctx = document.getElementById('userChart').getContext('2d');
  // var ctx1 = document.getElementById('roleChart').getContext('2d');
  // document.addEventListener('livewire:navigated', () => {
           
  //         window.userChart = new Chart(ctx, {
  //               type: 'bar',
  //               data: {
  //                   labels: {!!json_encode($userLabel)!!},
  //                   datasets: {!!json_encode($userDatasets)!!},
  //               },
               
  //             });
               
              
  //             window.roleChart = new Chart(ctx1, {
  //               type: 'doughnut',
  //               data: {
  //                   labels: {!!json_encode($roleLabel)!!},
  //                   datasets: {!!json_encode($roleDatasets)!!},
  //               },
               
  //             });
          
  //         });
  document.addEventListener('user-created', function () {  console.log('Event received !!!!!1');});

document.addEventListener('DOMContentLoaded', function () {  
    
          chartRole();
          chartUser();
  });
  document.addEventListener('livewire:navigated', () => {
           
          chartRole();
          chartUser();
});
 
  
  function chartUser()
  {
    const chart = Highcharts.chart('container', {
              chart: {
                  type: 'line'
              },
              title: {
                  text: 'Users Registered'
              },
              xAxis: {
                  categories: {!!json_encode($userLabel)!!},
              },
              yAxis: {
                  title: {
                      text: 'Users'
                  }
              },
              series: [{
                  name: 'Users',
                  data:  {!!json_encode($userData)!!},
              }]
          });
  }
  function chartRole()
  {
    const chart1 = Highcharts.chart('container1', {
                chart: {
                    type: 'pie'
                },
                title: {
                    text: 'Roles'
                },
                tooltip: {
                    valueSuffix: '%'
                },
                
                plotOptions: {
                    series: {
                        allowPointSelect: true,
                        cursor: 'pointer',
                        dataLabels: [{
                            enabled: true,
                            distance: 20
                        }, {
                            enabled: true,
                            distance: -40,
                            format: '{point.percentage:.1f}%',
                            style: {
                                fontSize: '1em',
                                textOutline: 'none',
                                opacity: 0.7
                            },
                            filter: {
                                operator: '>',
                                property: 'percentage',
                                value: 10
                            }
                        }]
                    }
                },
                series: [
                    {
                        name: 'Percentage',
                        colorByPoint: true,
                        data:  {!!json_encode($roleDatasets)!!},
                    }
                ]
            });
    
  }

  </script>
   
</div>
