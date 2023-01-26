<script setup>
import  GuestLayoutLayouts  from "@/Layouts/GuestLayout.vue";
import  Label  from "@/Components/InputLabel.vue";
import  Input  from "@/Components/TextInput.vue"

const emitTest = e => console.log(e)
</script>

<template>
  <GuestLayoutLayouts>
    <Label value="件名">タイトル</Label>
    <Input 
    modelValue="初期値が入る"
    @update:modelValue="emitTest"></Input>
    
  </GuestLayoutLayouts>

</template>