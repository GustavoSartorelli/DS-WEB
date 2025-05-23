package com.example.segundaatividade1

import android.os.Bundle
import android.util.Log
import androidx.activity.ComponentActivity
import androidx.activity.compose.setContent
import androidx.activity.enableEdgeToEdge
import androidx.compose.foundation.clickable
import androidx.compose.foundation.layout.Arrangement
import androidx.compose.foundation.layout.Box
import androidx.compose.foundation.layout.Column
import androidx.compose.foundation.layout.Spacer
import androidx.compose.foundation.layout.fillMaxHeight
import androidx.compose.foundation.layout.fillMaxSize
import androidx.compose.foundation.layout.fillMaxWidth
import androidx.compose.foundation.layout.padding
import androidx.compose.foundation.layout.size
import androidx.compose.foundation.shape.CircleShape
import androidx.compose.material3.Card
import androidx.compose.material3.CardDefaults
import androidx.compose.material3.Scaffold
import androidx.compose.material3.Surface
import androidx.compose.material3.Text
import androidx.compose.runtime.Composable
import androidx.compose.ui.Alignment
import androidx.compose.ui.Modifier
import androidx.compose.ui.graphics.Color
import androidx.compose.ui.tooling.preview.Preview
import androidx.compose.ui.unit.dp
import com.example.segundaatividade1.ui.theme.SegundaAtividade1Theme

class MainActivity : ComponentActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        enableEdgeToEdge()
        setContent {
            SegundaAtividade1Theme {
                Surface(
                    color = Color(0xFFB9B9B9)
                ) {
                        Column(
                            modifier = Modifier.fillMaxWidth().fillMaxHeight(),
                            verticalArrangement = Arrangement.Center,
                            horizontalAlignment = Alignment.CenterHorizontally
                        ) {
                            Card (
                                colors = CardDefaults.cardColors(
                                containerColor = Color.LightGray,
                                contentColor = Color.DarkGray
                            )) {
                                Text(modifier = Modifier.padding(10.dp), text = "Nome: Console Nintendo")
                                Text(modifier = Modifier.padding(10.dp), text = "Preço: R$ 4.499,90")
                            }
                            Spacer(modifier = Modifier.padding(10.dp))
                            Botao()
                        }
                    }
                }
            }
        }
    }

@Composable
fun Botao(){
    Card(
        modifier = Modifier.padding(3.dp).size(110.dp),
        shape = CircleShape
    ) {
        Box(
            modifier = Modifier.fillMaxSize(), contentAlignment = Alignment.Center
        )
        {
            Text(text = "Comprar")
        }
    }
}




