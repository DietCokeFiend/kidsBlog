<div class="row">
		<div class="large-12 columns">
				<div class="row">
					<div class="large-6 columns">
						<div class="panel">
							<h3>Comments</h3>
							<form method="post">
								Screen Name:
								<input type="text" name="comment_screenname" />
								<br />
								Comment:
								<br />
								<textarea name="comment_text"></textarea>
								<br>
								<input type="submit" value="Add Comment" />
							</form>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="large-6 columns">
						<?php comment_list(); ?>
					</div>
				</div>
		</div>
	</div>