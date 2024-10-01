<?php
/**
 * @
 * @
 */
interface ConfigInterface
{
	public function CommonMethod();
}
class Header implements ConfigInterface
{
	public $title = "Life Z";
	public $description = "Hi my name is Life Z / A freelance / web developer / vexer";
	public $keywords = "lifez";
	public $favicon = "./res/v5/img/logo.jpg";
	public $namesite = "Life Z";
	public $avatar = "./res/v5/img/avatar.gif";
	public $userName = [
		"Hello Everybody",
		"My name is Life Z.",
		"I really like website design 🌭",
	];
	public $trigger = "👉 Tìm hiểu tôi 😶&zwj;🌫️";
	public $bio1 = "🤖️ Người dam mê công nghệ số";
	public $bio2 = "🔍 Chia sẻ và giúp đỡ nhiệt tình";
	public $bio3 = "💻 Kỹ sư phát triển front-end";
	public $bio4 = "Thích làm thần tượng tiktok 🥳";
	public $bio5 = "Ăn, ngủ, làm và chơi game 🎮";
	public $bio6 = "Kẻ khờ dại tin vào tình yêu ✨";
	public $SocialNetworks = [
		"facebook" => "https://facebook.com/", // Thay link facebook
		"instagram" => "https://www.instagram.com/", // Thay link instagram
		"tiktok" => "https://www.tiktok.com/", // Thay link tiktok
		"telegram" => "https://t.me/lifez_z", // Thay link telegram
	];
	public function CommonMethod()
	{
		date_default_timezone_set("Asia/Ho_Chi_Minh");
	}
}

class LoveDays implements ConfigInterface
{
	public $ConfigLove = [
		"avatar_male" => "./res/v5/img/male.jpeg", // Thay đường dẫn tới thư mục chứa ảnh của bạn
		"name_male" => "Life Z", // Thay tên của bạn
		//========================================================//
		"avatar_female" => "./res/v5/img/female.jpeg", // Thay đường dẫn tới thư mục chứa ảnh bạn gái
		"name_female" => "Life X", // Thay tên đối phương
		//========================================================//
		"time_relashiption" => "28/03/2024", // Định dạng ngày tháng năm: DD-MM-YYYY or / or :
		//========================================================//
	];
	public function CommonMethod()
	{
	}
}
class MusicList implements ConfigInterface
{
	public $songs = [
		[
			"url" => "https://files.catbox.moe/jrxmcb.mp3",
			"avatar" => "https://imgur.com/a/Y5ztoTS",
			"title" => "Chờ Đợi Có Đáng Sợ",
			"author" => "D u o n G",
		],
		[
			"url" => "https://files.catbox.moe/da0wjg.mp3",
			"avatar" => "https://imgur.com/a/Y5ztoTS",
			"title" => "Chuyện Đôi Ta",
			"author" => "Xiong",
		],
		[
			"url" => "https://files.catbox.moe/woah8x.mp3",
			"avatar" => "https://imgur.com/a/Y5ztoTS",
			"title" => "Có Thể Hay Không",
			"author" => "Pham Viet Anh",
		],
		[
			"url" => "https://files.catbox.moe/hq5ptf.mp3",
			"avatar" => "https://imgur.com/a/Y5ztoTS",
			"title" => "Hơn Cả Mây Trời",
			"author" => "Tuấn Slime Remix",
		],
		[
			"url" => "https://files.catbox.moe/1kqw0c.mp3",
			"avatar" => "https://imgur.com/a/Y5ztoTS",
			"title" => "Màu Xanh",
			"author" => "LSang..?",
		],
		[
			"url" => "https://files.catbox.moe/tallj0.mp3",
			"avatar" => "https://imgur.com/a/Y5ztoTS",
			"title" => "Như Anh Đã Thấy Em",
			"author" => "Nguyen Van An",
		],
		[
			"url" => "https://files.catbox.moe/wcbfxi.mp3",
			"avatar" => "https://imgur.com/a/Y5ztoTS",
			"title" => "Play Date",
			"author" => "Nguyễn AN",
		],
		[
			"url" => "https://files.catbox.moe/woah8x.mp3",
			"avatar" => "https://imgur.com/a/Y5ztoTS",
			"title" => "Thêm Bao Nhiêu Lâu",
			"author" => "Tuấn Slime Remix",
		],
		[
			"url" => "https://files.catbox.moe/xdh6x6.mp3",
			"avatar" => "https://imgur.com/a/Y5ztoTS",
			"title" => "Thu Cuối",
			"author" => "Nin Hoang Official",
		],
		// Thêm nhạc tại đây
	];
	public function CommonMethod()
	{
	}
}
