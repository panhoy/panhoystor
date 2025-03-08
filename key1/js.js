

const express = require('express');
const Stripe = require('stripe');
const stripe = Stripe('your_secret_key');
const app = express();

app.use(express.json());

app.post('/create-setup-intent', async (req, res) => {
  try {
    // Create a SetupIntent
    const setupIntent = await stripe.setupIntents.create({
      customer: 'customer_id', // Replace with your customer ID
    });

    res.send({ clientSecret: setupIntent.client_secret });
  } catch (error) {
    res.status(500).send({ error: error.message });
  }
});

app.listen(3000, () => console.log('Server running on port 3000'));
