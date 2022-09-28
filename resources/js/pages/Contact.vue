
<script setup>
   import { ref } from 'vue';

    
    let first_name = ref('');
    let last_name = ref('');
    let email = ref('');
    let message = ref('');
    let success = ref(false);

/*
    function submitform(e) {
    
    e.preventDefault();

   
    

    const params = JSON.stringify(
        {
            first_name : first_name,
            last_name: last_name,
            email: email,
            message: message
        });
    axios
        .post('api/contact', params,
        {
            headers: {"content-type": "application/json",},
        })
        .then(function (response) 
        {
            success = true;
        })
        .catch(function (error) 
            {
                console.log(error);})
        .then(function () 
            {
                alert('somehow here');
            });
        }*/

    const submitform = () => {
      axios
        .get("api/contact")
        .then((response) => {
          state.pokemons = response.data.results; // 👈 get just results
        }).catch((error) =>{
         
            });
    };

</script>

<template>
    <form @submit="submitform" class="w-full max-w-lg">
  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
        First Name
      </label>
      <input v-model="first_name" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="First Name">
      <p class="text-red-500 text-xs italic">Please fill out this field.</p>
    </div>
    <div class="w-full md:w-1/2 px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
        Last Name
      </label>
      <input v-model="last_name" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Last Name">
    </div>
  </div>
  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
        E-mail
      </label>
      <input  v-model="email" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="email" type="email"  placeholder="Email">
      <p class="text-gray-600 text-xs italic">Some tips - as long as needed</p>
    </div>
  </div>
  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
        Message
      </label>
      <textarea  v-model="message" class=" no-resize appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 h-48 resize-none" id="message"  placeholder="Message"></textarea>
    <p style="color:red" v-if="success">Message Send !</p>
      
    </div>
  </div>
  <div class="md:flex md:items-center">
    <div class="md:w-1/3">
      <button class="shadow bg-teal-400 hover:bg-teal-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
        Send
      </button>
    </div>
    <div class="md:w-2/3"></div>
  </div>
</form>
</template>


