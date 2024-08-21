<template>
  <div v-for="items in craftableProUsers.data">
    <div v-for="item in items.roles">
      <div v-if="item.pivot.model_id===user.id">
        <!-- admin dashboard -->
        <div v-if="item.name===('administrator')|| item.name===('club_admin')">
          <div class=" w-full p-10">
            <h1 class=" text-3xl font-bold pb-10">DashBoard</h1>
            <!-- first dashbord -->
            <div class=" grid grid-cols-2 gap-8">
              <!-- left -->
              <div class=" col-span-1 h-auto">
                <!-- total club -->
                <div class=" grid grid-cols-2 h-56 bg-orange-100 p-10 mb-12">
                  <div class=" col-span-2 grid grid-cols-2">
                    <div class=" col-span-1 flex items-center justify-center">
                      <img :src="'/images/Solid.png'" alt="">
                    </div>
                    <div class=" col-span-1 text-center">
                      <h3 class=" text-xl">Total Clubs</h3>
                      <h1 class=" text-7xl">{{clubCount}}</h1>
                    </div>
                  </div>
                </div>
                <!-- total member -->
                <div class=" grid grid-cols-2 h-56 p-10 bg-slate-200">
                  <div class=" col-span-2 grid grid-cols-2">
                    <div class=" col-span-1 flex items-center justify-center">
                      <img :src="'/images/Vector.png'" alt="">
                    </div>
                    <div class=" col-span-1 text-center">
                      <h3 class=" text-xl">Total Members</h3>
                      <h1 class=" text-7xl">{{ activeCount+dieCount }}</h1>
                    </div>
                  </div>
                </div>
                
              </div>
              <!-- right -->
              <div class=" col-span-1 bg-slate-200 h-auto p-8">
                <h1 class=" text-2xl font-bold">Membership Status Distribution</h1>
                <div class="card flex justify-center">
                  <Chart type="doughnut" :data="piechartData" :options="piechartOptions" class="w-full md:w-[25rem]" />
                </div>
              </div>
            </div>
            <!-- second dashboard -->
            <div class="card bg-white p-10 mt-10">
              <h1 class=" text-2xl font-bold">Total Membership Across Clubs</h1>
              <Chart type="bar" :data="chartData" :options="chartOptions" class="h-[30rem]"  />
            </div>
            <div class="card bg-white p-10 mt-10">
              <h1 class=" text-2xl font-bold">Membership in Each Clubs</h1>
              <Chart type="bar" :data="hchartData" :options="hchartOptions" class="h-[30rem]"  />
            </div>
          </div>
          

          
        </div>
        <!-- manager dashboard -->
        <div v-else-if="item.name==='club_manager'">
          <div class=" grid grid-cols-3 gap-5 ml-5 mr-5 mt-5">
          <div v-for="clubs in club">
            <div v-for="medias in media">
              <div v-if="medias.model_id===clubs.id && clubs.craftable_pro_users_id===user.id">
                <div class="  bg-slate-200 rounded-2xl border-2 border-solid border-orange-500 col-span-1 flex w-full m-auto p-10 items-center justify-center">
                  <img class=" w-16 h-16 mr-5" :src="'/media/' + medias.id + '/' + medias.file_name" alt="Logo">
                  <h1 class=" text-3xl font-bold">{{ clubs.name }}</h1>
                </div>
              </div>
            </div>
          </div>
          </div>
          <!-- dashboard -->
          <div class=" w-full bg-white p-10 ml-5 mr-5 mt-5">
            <h1 class=" text-2xl font-bold">Dashboard</h1>
            <div class=" grid grid-cols-4 gap-5 mt-5">
              <div class=" col-span-1 h-56 bg-orange-50 rounded-3xl">
                <h1 class=" text-7xl text-orange-600 text-center p-10 font-bold">200</h1>
                <h1 class=" text-2xl text-orange-600 text-center">Total Member</h1>
              </div>
              <div class=" col-span-1 h-56 bg-orange-50 rounded-3xl">
                <h1 class=" text-7xl text-orange-600 text-center p-10 font-bold">90</h1>
                <h1 class=" text-2xl text-orange-600 text-center">Active Member</h1>
              </div>
            </div>
          </div>
        </div>
        <!-- no  -->
        <div v-else>
        <h1 class=" text-center font-bold text-4xl pt-20">Dashboard Empty...</h1>
        <h1 class=" text-center text-2xl pt-20">Please Login With Administrator Account</h1>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup lang="ts">
import { PaginatedCollection } from "craftable-pro/types/pagination";
import type { CraftableProUser ,Info,Role} from "craftable-pro/types/models";
import { useUser } from "craftable-pro/hooks/useUser";
import Chart from 'primevue/chart';
import type { User,Club } from "./types";


import { ref,onMounted } from 'vue';

const {user}=useUser();
interface Props {
  craftableProUsers: PaginatedCollection<CraftableProUser>;
  roles: Role[];
  filterOptions: {
    roles: string[];
  };
  role:PaginatedCollection<Role>;
  club:Club;
  media:PaginatedCollection<Role>;
  infoUsers:PaginatedCollection<Info>
  userStatus:User;
}


const props=defineProps<Props>();

const countClub=[];
  props.club.forEach(count => {
    countClub.push(count.name);
});
const clubCount = countClub.filter(count => count ).length;
console.log(countClub)

const Users=[];
props.userStatus.forEach(userstatus => {
  Users.push(userstatus.active);
});

const newData = Users.map(value => {
  if (value === 1) {
    return 'active';
} else {
  return 'die';
}
});

const activeCount = newData.filter(status => status === 'active').length;
const dieCount = newData.filter(status => status === 'die').length;
onMounted(() => {
    piechartData.value = setPieChartData();
    piechartOptions.value = setPieChartOptions();
    chartData.value = setChartData();
    chartOptions.value = setChartOptions();
    hchartData.value = setHChartData();
    hchartOptions.value = setHChartOptions();
});

const piechartData = ref();
const piechartOptions = ref();
const setPieChartData = () => {
  const item = ['Active','Dle'];
  const data = [activeCount, dieCount];
  const total = data.reduce((acc, val) => acc + val, 0);
  const percentages = data.map(value => ((value / total) * 100).toFixed(2));

  return {
    labels: item.map((label, index) => `${label} (${percentages[index]}%)`),
    datasets: [
      {
        data,
      }
    ]
  };
};


const setPieChartOptions = () => {
    const documentStyle = getComputedStyle(document.documentElement);
    const textColor = documentStyle.getPropertyValue('--p-text-color');

    return {
        plugins: {
            legend: {
                labels: {
                    cutout: '60%',
                    color: textColor
                }
            }
        }
    };
};


const chartData = ref();
const chartOptions = ref();

const setChartData = () => {
    const documentStyle = getComputedStyle(document.documentElement);

    return {
        labels: countClub,
        datasets: [
            {
                label: 'Male',
                backgroundColor: 'blue',
                borderColor: documentStyle.getPropertyValue('--p-green-500'),
                data: [65, 59, 80, 81, 56, 55, 40]
            },
            {
                label: 'Female',
                backgroundColor: 'orange',
                borderColor: documentStyle.getPropertyValue('--p-gray-500'),
                data: [28, 48, 40, 19, 86, 27, 90]
            }
        ]
    };
};
const setChartOptions = () => {
    const documentStyle = getComputedStyle(document.documentElement);
    const textColor = documentStyle.getPropertyValue('--p-text-color');
    const textColorSecondary = documentStyle.getPropertyValue('--p-text-muted-color');
    const surfaceBorder = documentStyle.getPropertyValue('--p-content-border-color');

    return {
        maintainAspectRatio: false,
        aspectRatio: 0.8,
        plugins: {
            legend: {
                labels: {
                    color: textColor
                }
            }
        },
        scales: {
            x: {
                ticks: {
                    color: textColorSecondary,
                    font: {
                        weight: 500
                    }
                },
                grid: {
                    display: false,
                    drawBorder: false
                }
            },
            y: {
                ticks: {
                    color: textColorSecondary
                },
                grid: {
                    color: surfaceBorder,
                    drawBorder: false
                }
            }
        }
    };
}

const hchartData = ref();
const hchartOptions = ref();

const setHChartData = () => {
    const documentStyle = getComputedStyle(document.documentElement);

    return {
        labels: countClub,
        datasets: [
            {
                label: 'Male',
                backgroundColor: 'blue',
                borderColor: documentStyle.getPropertyValue('--p-cyan-500'),
                data: [65, 59, 80, 81, 56, 55, 40]
            },
            {
                label: 'Female',
                backgroundColor: 'orange',
                borderColor: documentStyle.getPropertyValue('--p-gray-500'),
                data: [28, 48, 40, 19, 86, 27, 90]
            }
        ]
    };
};
const setHChartOptions = () => {
    const documentStyle = getComputedStyle(document.documentElement);
    const textColor = documentStyle.getPropertyValue('--p-text-color');
    const textColorSecondary = documentStyle.getPropertyValue('--p-text-muted-color');
    const surfaceBorder = documentStyle.getPropertyValue('--p-content-border-color');

    return {
        indexAxis: 'y',
        maintainAspectRatio: false,
        aspectRatio: 0.8,
        plugins: {
            legend: {
                labels: {
                    color: textColor
                }
            }
        },
        scales: {
            x: {
                ticks: {
                    color: textColorSecondary,
                    font: {
                        weight: 500
                    }
                },
                grid: {
                    display: false,
                    drawBorder: false
                }
            },
            y: {
                ticks: {
                    color: textColorSecondary
                },
                grid: {
                    color: surfaceBorder,
                    drawBorder: false
                }
            }
        }
    };
}


</script>
