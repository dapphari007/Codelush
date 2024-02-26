const express = require('express');
const path = require('path'); // To serve static files
const { GoogleGenerativeAI, HarmCategory, HarmBlockThreshold } = require('@google/generative-ai');

const app = express();
const MODEL_NAME = 'gemini-1.0-pro'; // Replace with your desired model

// Replace with your actual API key
const API_KEY = 'YOUR_API_KEY';

// Configure safety settings
const safetySettings = [
  {
    category: HarmCategory.HARM_CATEGORY_HARASSMENT,
    threshold: HarmBlockThreshold.BLOCK_MEDIUM_AND_ABOVE,
  },
  // ... other safety settings
];

async function runChat(userInput) {
  const genAI = new GoogleGenerativeAI(API_KEY);
  const model = genAI.getGenerativeModel({ model: MODEL_NAME });

  const generationConfig = {
    temperature: 0.9,
    topK: 1,
    topP: 1,
    maxOutputTokens: 2048,
  };

  const chat = model.startChat({
    generationConfig,
    safetySettings,
  });

  const result = await chat.sendMessage(userInput);
  return result.response.text();
}

app.post('/api/chat', async (req, res) => {
  const { userInput } = req.body;
  const response = await runChat(userInput);
  res.json({ response });
});

// Serve static files from the 'public' folder
app.use(express.static(path.join(__dirname, 'public')));

app.get('*', (req, res) => {
  // Serve index.html for all other routes
  res.sendFile(path.join(__dirname, 'public', 'index.html'));
});

app.listen(3000, () => console.log('Server listening on port 3000'));
