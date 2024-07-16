var resposta, texto_entrada;

// Descreva esta função...
function enviar() {
  texto_entrada = $("#input").val();
  $("#resposta").val('🤔IA, Anderson, gerando resposta!');
  window.myGlobalFunctions.generateContent('responda como um assistente me chamando de Amigo', texto_entrada, retorno_gemini);}

// Descreva esta função...
function retorno_gemini(resposta) {
  $("#resposta").val(resposta);
}


//feito com bootblocks.com.br
  window.myGlobalFunctions = {};
  window.onload = function() {
  window.myGlobalFunctions.generateContent = async function(context, text_input, function_name) {
    let prompt = context + " " + text_input;
    const model = window.genAI.getGenerativeModel({ model: "gemini-pro" });
    const result = await model.generateContent(prompt);
    const response = await result.response;
    const text = response.text();
    function_name(text);
  };
  async function fileToGenerativePart(file) {
      const base64EncodedDataPromise = new Promise((resolve) => {
          const reader = new FileReader();
          reader.onloadend = () => resolve(reader.result.split(",")[1]);
          reader.readAsDataURL(file);
  });
  return {
      inlineData: { data: await base64EncodedDataPromise, mimeType: file.type },
  };
  };
  window.myGlobalFunctions.genereteTextFromImage = async function(file, text_input, function_name) {
     const imagePart = await fileToGenerativePart(file);   const imageParts = [imagePart];
     const prompt = text_input;
     const model = window.genAI.getGenerativeModel({ model: "gemini-pro-vision" });
     const result = await model.generateContent([prompt, ...imageParts]);
     const response = await result.response;
     const text = response.text();
     function_name(text);
  };
  };

//feito com bootblocks.com.br

        $(document).ready(function(){
            $("#loading-page-bb").css("opacity", "1");
        });