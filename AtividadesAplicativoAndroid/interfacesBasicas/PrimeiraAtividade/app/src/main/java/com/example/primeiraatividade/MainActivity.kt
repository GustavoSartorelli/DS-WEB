package com.example.primeiraatividade

import android.os.Bundle
import androidx.activity.ComponentActivity
import androidx.activity.compose.setContent
import androidx.activity.enableEdgeToEdge
import androidx.compose.foundation.layout.Arrangement
import androidx.compose.foundation.layout.Column
import androidx.compose.foundation.layout.Spacer
import androidx.compose.foundation.layout.fillMaxHeight
import androidx.compose.foundation.layout.fillMaxSize
import androidx.compose.foundation.layout.fillMaxWidth
import androidx.compose.foundation.layout.padding
import androidx.compose.material3.Card
import androidx.compose.material3.CardDefaults
import androidx.compose.material3.Scaffold
import androidx.compose.material3.Surface
import androidx.compose.material3.Text
import androidx.compose.runtime.Composable
import androidx.compose.ui.Alignment
import androidx.compose.ui.Modifier
import androidx.compose.ui.graphics.Color
import androidx.compose.ui.modifier.modifierLocalMapOf
import androidx.compose.ui.tooling.preview.Preview
import androidx.compose.ui.unit.dp
import com.example.primeiraatividade.ui.theme.PrimeiraAtividadeTheme

class MainActivity : ComponentActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        enableEdgeToEdge()
        setContent {
            PrimeiraAtividadeTheme {
                Surface (modifier = Modifier.fillMaxSize(),
                    color = Color.DarkGray) {
                        Column(
                            modifier = Modifier
                                .fillMaxSize(),
                            verticalArrangement = Arrangement.Center,
                            horizontalAlignment = Alignment.CenterHorizontally
                        ) {
                            CardUsuario(
                                name = "Gustavo Sartorelli",
                                tel = "15 11111-1111",
                                email = "gustavo@gmail.com",
                            )
                            Spacer(modifier = Modifier.padding(10.dp))
                            CardUsuario(
                                name = "Bruno Campos",
                                tel = "15 22222-2222",
                                email = "bruno@gmail.com",
                            )
                        }
                    }
                }
            }
        }
    }

@Composable
fun CardUsuario(name: String, tel: String, email: String) {
    Card (
        colors = CardDefaults.cardColors(Color.White)
    ){
        Column(modifier = Modifier.padding(15.dp)) {
            Text(text = "Name: $name")
            Text(text = "Tel: $tel")
            Text(text = "Email: $email")

        }
    }
}

