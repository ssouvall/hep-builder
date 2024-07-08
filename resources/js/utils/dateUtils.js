export const getFormattedDate = (inputDate = new Date()) => {
    const date = new Date(inputDate);
  
    const padToTwoDigits = (num) => num.toString().padStart(2, '0');
  
    const month = padToTwoDigits(date.getMonth() + 1);
    const day = padToTwoDigits(date.getDate());
    const year = date.getFullYear();
    const hours = padToTwoDigits(date.getHours());
    const minutes = padToTwoDigits(date.getMinutes());
    const seconds = padToTwoDigits(date.getSeconds());
  
    return `${month}-${day}-${year}:${hours}:${minutes}:${seconds}`;
};