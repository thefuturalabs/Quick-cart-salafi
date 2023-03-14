import 'package:flutter/material.dart';
import 'package:flutter/src/widgets/framework.dart';
import 'package:flutter/src/widgets/placeholder.dart';

class OrderHistory extends StatelessWidget {
  const OrderHistory({super.key});


getData()async{

}

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(title: Text('Order History'),),
      body: FutureBuilder(future:getData() ,builder: (_,snap){
      return Placeholder();
      }),
    );
  }
}