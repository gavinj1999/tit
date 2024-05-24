<script setup>
import { Head, Link } from '@inertiajs/vue3';
import Nav from '@/Components/Nav.vue';
import axios from 'axios';
defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    laravelVersion: {
        type: String,
        required: true,
    },
    phpVersion: {
        type: String,
        required: true,
    },
});

function handleImageError() {
    document.getElementById('screenshot-container')?.classList.add('!hidden');
    document.getElementById('docs-card')?.classList.add('!row-span-1');
    document.getElementById('docs-card-content')?.classList.add('!flex-row');
    document.getElementById('background')?.classList.add('!hidden');
}



let config = {
  method: 'get',
  maxBodyLength: Infinity,
  url: 'https://members-api.parliament.uk/api/Members/Search?NameStartsWith=mercer&skip=0&take=20',
  headers: {
    'Cookie': '__cf_bm=OiABXqJt4IRMBUJ8_t2yKSidC5Q_tfUzTm1bVF6WLac-1716530874-1.0.1.1-DREk8a1KCLKGkIRAoiDvRhd0OGhckGT5eMz70yY67H2jqp20qzYCWMha7EOJhN36rok7.PVu3cIl5aKqz6oQsg'
  }
};

axios.request(config)
.then((response) => {
  console.log(JSON.stringify(response.data));
})
.catch((error) => {
  console.log(error);
});

</script>

<template>

    <Head title="Welcome" />
    <div class="container">
        <form action="">
            <label class="font-semibold px-3" for="mpName">MP Name</label>
            <input class="rounded-full" name="mpName" id="mpName" type="text">
        </form>
    </div>

</template>
