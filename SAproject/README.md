Mash up จากการใช้ the movies DB  กับ Youtube API เพื่อที่เราสามารถดูหนังที่เป็น Popular movies, Top rated movies, Now showing movies แล้ว Youtube API 
ก็ช่วยในเรื่องของการดึงคลิปตัวอย่างหนังมา โดยเมื่อเราคลิกที่รูปโปสเตอร์หนัง ก็จะทำการส่งID ไปยัง the movies DB API เพื่อรับรายละเอียดของหนังเรื่องนั้น
และส่งกลับมาเพื่อเรียกใช้งาน youtube API เพื่อใช้ดูตัวอย่างหนัง ตัวอย่างฟอร์ม <iframe width="560" height="315" src="'."https://www.youtube.com/embed/"<<code video>>'" frameborder="0" allowfullscreen></iframe> 
   ตัวอย่างข้อมูลไฟล์ JSON ที่ได้รับมา https://api.themoviedb.org/3/movie/top_rated?api_key=96d465d3f37f8890b044778f76a520d3&language=en-US&page=1 
