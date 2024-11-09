
<!-- <template >
    <div class="flex min-h-full flex-1 flex-col justify-center px-6 py-12  lg:px-8">
      <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        
        <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">
            {{ title }}
        </h2>
      </div>
  
      <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
        <form class="space-y-6" @submit.prevent="emit('submit')" method="POST">
                <slot></slot>
        </form>
        </div>
    </div>
  </template>
  
  
  <script setup> -->
// import Login from '@/views/Login.vue';
<!-- const emit=defineEmits(['submit'])

    const {title} =  defineProps({
        title: String
    }) -->

  <!-- </script> -->

// <!-- <script setup>
// const {title} = defineProps({
//   title: String  
// })
// </script> -->
<template>
  <div class="min-h-full flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full space-y-8">
      <div>
        <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
          {{ title }}
        </h2>
      </div>
      <slot></slot>
    </div>
  </div>
</template>

<script setup>
  const {title} = defineProps({
    title: String
  })
</script>

<style scoped>

</style>
 
