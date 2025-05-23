package com.example.terceiroatividade

import android.os.Bundle
import android.util.Log
import androidx.activity.ComponentActivity
import androidx.activity.compose.setContent
import androidx.compose.foundation.clickable
import androidx.compose.foundation.layout.Arrangement
import androidx.compose.foundation.layout.Box
import androidx.compose.foundation.layout.Column
import androidx.compose.foundation.layout.Spacer
import androidx.compose.foundation.layout.fillMaxHeight
import androidx.compose.foundation.layout.fillMaxSize
import androidx.compose.foundation.layout.fillMaxWidth
import androidx.compose.foundation.layout.height
import androidx.compose.foundation.layout.padding
import androidx.compose.foundation.layout.size
import androidx.compose.foundation.shape.CircleShape
import androidx.compose.material3.Card
import androidx.compose.material3.Surface
import androidx.compose.material3.Text
import androidx.compose.runtime.Composable
import androidx.compose.runtime.getValue
import androidx.compose.runtime.mutableIntStateOf
import androidx.compose.runtime.mutableStateOf
import androidx.compose.runtime.remember
import androidx.compose.runtime.setValue
import androidx.compose.ui.Alignment
import androidx.compose.ui.Modifier
import androidx.compose.ui.graphics.Color
import androidx.compose.ui.text.TextStyle
import androidx.compose.ui.tooling.preview.Preview
import androidx.compose.ui.unit.dp
import androidx.compose.ui.unit.sp
import com.example.terceiroatividade.ui.theme.TerceiroAtividadeTheme

class MainActivity : ComponentActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContent {
            TerceiroAtividadeTheme {
                MyApp()

            }
        }
    }
}

@Composable
fun MyApp() {
    var moneyCounter by remember { mutableStateOf(0) }
    var moneyCounter2 by remember { mutableStateOf(0) }
    Surface(
        modifier = Modifier.fillMaxHeight().fillMaxWidth(),
        color = Color(0xFF546E7A)
    ) {
        Column(
            verticalArrangement = Arrangement.Center,
            horizontalAlignment = Alignment.CenterHorizontally
        ) {
            Text(text = "Time A",
                style = TextStyle(color = Color.White,
                    fontSize = 39.sp)
            )
            Text(text = "Pontos: $moneyCounter",
                style = TextStyle(color = Color.White,
                    fontSize = 39.sp))
            Spacer(modifier = Modifier.padding(10.dp)) //Pular linha do ponto do time A
            CreateCircle(moneyCounter) {moneyCounter +=1}
            Spacer(modifier = Modifier.height(60.dp)) //Pular linha entre os dois times

            Text(text = "Time B",
                style = TextStyle(color = Color.White,
                    fontSize = 39.sp)
            )
            Text(text = "Pontos: $moneyCounter2",
                style = TextStyle(color = Color.White,
                    fontSize = 39.sp))
            Spacer(modifier = Modifier.padding(10.dp)) //Pular linha do ponto do time B
            CreateCircle(moneyCounter2) {moneyCounter2 +=1}
        }
    }
}

@Composable
fun CreateCircle(moneyCounter: Int, onTap: () -> Unit) {
    var moneyCounter by remember { mutableIntStateOf(0) }
    Card(
        modifier = Modifier
            .padding(3.dp)
            .size(150.dp)
            .clickable {
                onTap()
                Log.d("Contador", "CreateCircle: $moneyCounter")
            },
        shape = CircleShape
    ) {
        Box (modifier = Modifier.fillMaxSize(), contentAlignment = Alignment.Center){
            Text(text = "Add")
        }



    }
}
