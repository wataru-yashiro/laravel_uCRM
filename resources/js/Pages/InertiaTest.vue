<script setup>
import { Link } from '@inertiajs/vue3';
import { ref } from 'vue'

const newTitle = ref('')
const newContent = ref('')

</script>

<template>
  Inerttiaテスト<br><br>

  <a href="#">aタグ経由</a>
  <br>

  <Link href="#">リンク軽油</Link><br>

  <Link :href="route('inertia.index')">名前付きルート</Link><br>

  <Link :href="route('inertia.show', {id:1})">ルートパラメータを送信</Link>
  <div class="mb-8">
    <input type="text" name="newTitle" v-model="newTitle">{{ newTitle }}<br>
    <input type="text" name="newContent" v-model="newContent">{{ newContent }}
    
    <Link as="button" :href="route('inertia.store')" method="post" 
    :data="{
      title: newTitle,
      content: newContent
    }">butto</Link>
  </div>
  
  </template>