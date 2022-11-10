<html>
	<head>
	</head>
	<body>
		<div id="target">
			<div>
                <p></p>
　　　　　　　　　　<button class="btn" onclick="location.href='https://localhost/jikken.php'" >編集</button>
				<button onclick="removeExample(this)">削除</button>
            <input type="button" onclick="history.back()" value="Todoリスト表示へ">
			</div>
		</div>
		
		<script type="text/javascript">
			let cnt = 1;
			const btn = document.getElementById("add");
            
			
			function addExample() {
				++cnt;
				let elements = document.getElementById("target");
				let copied = elements.lastElementChild.cloneNode(true);
				
				// セレクトメニューの値をコピー
				let val = elements.lastElementChild.firstElementChild.selectedIndex;
				copied.firstElementChild.selectedIndex = val;
				
				// コピー先ラジオボタンのname属性を編集
				copied.children[3].setAttribute("name", "yn" + cnt);
				copied.children[4].setAttribute("name", "yn" + cnt);
				
				elements.appendChild(copied);
			}
			
			btn.addEventListener("click", addExample, false);
			
			function removeExample(button) {
				if (window.confirm('本当に削除しますか？')) {
					let parent = button.parentNode;
					parent.remove();
				}
			}
			
		</script>
	</body>
</html>
 

