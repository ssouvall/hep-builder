<template>
  <div class="relative text-center max-h-screen w-full p-4 bg-white">
    <h1 class="text-xl mb-6">Home Exercise Program Builder</h1>
    <input 
      v-model="name" 
      type="text" 
      placeholder="Enter Program Name..." 
      class="mb-4 p-2 border border-gray-300 rounded w-full"
    />

    <div class="max-h-full h-full overflow-y-scroll pb-64">
      <div v-if="selectedItems?.length === 0">
        <NoExercisesAdded />
      </div>
      <div v-else v-for="item in selectedItems" :key="item.id" class="w-full flex items-center bg-white shadow p-4 mb-4 rounded-lg h-40">
        <!-- Image -->
        <div class="w-1/8 h-24 flex-shrink-0">
          <img :src="item.image" alt="Item Image" class="h-24 w-32 object-cover rounded-l-lg" />
        </div>

        <!-- Item Details -->
        <div class="w-6/8 px-4">
          <div class="text-center font-semibold mb-2">{{ item.title }}</div>
          <div class="grid grid-cols-2 gap-2">
            <div class="flex items-center">
              <label :for="'weekly-' + item.id" class="text-sm font-medium text-gray-700 mr-2">x Weekly:</label>
              <input v-model="item.weekly" :id="'weekly-' + item.id" type="number" class="p-1 border border-gray-300 rounded w-16" />
            </div>
            <div class="flex items-center">
              <label :for="'daily-' + item.id" class="text-sm font-medium text-gray-700 mr-2">x Daily:</label>
              <input v-model="item.daily" :id="'daily-' + item.id" type="number" class="p-1 border border-gray-300 rounded w-16" />
            </div>
            <div class="flex items-center">
              <label :for="'sets-' + item.id" class="text-sm font-medium text-gray-700 mr-2">Sets:</label>
              <input v-model="item.sets" :id="'sets-' + item.id" type="number" class="p-1 border border-gray-300 rounded w-16" />
            </div>
            <div class="flex items-center">
              <label :for="'reps-' + item.id" class="text-sm font-medium text-gray-700 mr-2">Reps:</label>
              <input v-model="item.reps" :id="'reps-' + item.id" type="number" class="p-1 border border-gray-300 rounded w-16" />
            </div>
            <div class="flex items-center">
              <label :for="'hold-' + item.id" class="text-sm font-medium text-gray-700 mr-2">Hold:</label>
              <input v-model="item.hold" :id="'hold-' + item.id" type="number" class="p-1 border border-gray-300 rounded w-16" />
            </div>
          </div>
        </div>

        <!-- Remove Button -->
        <div class="w-1/8 flex-shrink-0 flex justify-center items-center">
          <button @click="removeItem(item.id)" class="text-red-500 hover:text-red-700">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
      </div>
    </div>

    <div class="sticky bottom-0 left-0 right-0 bg-white p-4">
      <button @click="exportAsPDF"
        class="btn overflow-hidden relative w-1/2 bg-white text-app-blue py-1 px-1 border-app-blue border-2 rounded-l-lg font-bold uppercase"
      >
        Export as PDF
      </button>
      <button 
        class="btn overflow-hidden relative w-1/2 bg-app-blue text-white py-1 px-1 border-app-blue border-2 rounded-r-lg font-bold uppercase"
      >
        Save
      </button>
    </div>
  </div>
</template>

<script setup>
import { ref } from 'vue';
import { jsPDF } from 'jspdf';
import html2canvas from 'html2canvas';
import { getFormattedDate } from '@/utils/dateUtils';
import NoExercisesAdded from '@/Components/Builder/NoExercisesAdded.vue';

const props = defineProps({
  selectedItems: Array
});

const name = ref('');
const defaultProgramName = `Home Exercise Program ${getFormattedDate()}`

const removeItem = (id) => {
  const index = props.selectedItems.findIndex(item => item.id === id);
  if (index !== -1) {
    props.selectedItems.splice(index, 1);
  }
};

const exportAsPDF = async () => {
  const pdf = new jsPDF('p', 'pt', 'a4');
  let yOffset = 20;

  const title = name?.value || defaultProgramName;
  pdf.setFontSize(20);
  const pageWidth = pdf.internal.pageSize.getWidth();
  const textWidth = pdf.getTextWidth(title);
  pdf.text(title, (pageWidth - textWidth) / 2, yOffset);
  yOffset += 40;

  for (let i = 0; i < props.selectedItems.length; i++) {
    const item = props.selectedItems[i];

    const itemDiv = document.createElement('div');
    itemDiv.style.marginBottom = '20px';
    itemDiv.style.border = '1px solid #ccc';
    itemDiv.style.padding = '10px';
    itemDiv.style.width = '540px';
    itemDiv.innerHTML = `
      <div style="text-align: center; font-weight: bold; margin-bottom: 10px;">
        ${item.title}
      </div>
      <div style="display: flex; margin-bottom: 10px;">
        <div style="flex: 1;">
          <img src=${item.image} alt="Item Image" style="width: 100%; height: auto; object-fit: cover;">
        </div>
        <div style="flex: 1; display: flex; flex-wrap: wrap; padding-left: 10px;">
          <div style="width: 50%; padding: 5px;">
            x Weekly: ${item.weekly || ''}
          </div>
          <div style="width: 50%; padding: 5px;">
            x Daily: ${item.daily || ''}
          </div>
          <div style="width: 50%; padding: 5px;">
            Sets: ${item.sets || ''}
          </div>
          <div style="width: 50%; padding: 5px;">
            Reps: ${item.reps || ''}
          </div>
          <div style="width: 50%; padding: 5px;">
            Hold: ${item.hold || ''}
          </div>
        </div>
      </div>
      <div style="width: 100%; margin-top: 10px;">
        ${item.instructions || ''}
      </div>
    `;

    document.body.appendChild(itemDiv);

    const canvas = await html2canvas(itemDiv);
    const imgData = canvas.toDataURL('image/png');
    const imgProps = pdf.getImageProperties(imgData);
    const pdfWidth = pdf.internal.pageSize.getWidth();
    const pdfHeight = (imgProps.height * pdfWidth) / imgProps.width;

    if (yOffset + pdfHeight > pdf.internal.pageSize.getHeight() - 20) {
      pdf.addPage();
      yOffset = 20;
    }

    pdf.addImage(imgData, 'PNG', 20, yOffset, pdfWidth - 40, pdfHeight);
    yOffset += pdfHeight + 10;

    document.body.removeChild(itemDiv);
  }

  pdf.save('exercise_program.pdf');
};

</script>

<style>
.pdf-container {
  display: none;
}
</style>
